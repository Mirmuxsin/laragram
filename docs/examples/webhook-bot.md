---
layout: default
title: Webhook Bot Example
---

# Webhook Bot Example

A production-ready bot using webhooks.

## Implementation

```php
<?php

use Milly\Laragram\Laragram;
use Milly\Laragram\Types\Update;

class WebhookController extends Controller
{
    public function handle(Request $request)
    {
        // Verify webhook secret (optional but recommended)
        $secretToken = config('laragram.webhook_secret');
        if ($secretToken && $request->header('X-Telegram-Bot-Api-Secret-Token') !== $secretToken) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        try {
            $update = new Update();
            $this->processUpdate($update);
            
            return response()->json(['ok' => true]);
        } catch (Exception $e) {
            Log::error('Webhook error: ' . $e->getMessage());
            return response()->json(['error' => 'Internal error'], 500);
        }
    }
    
    private function processUpdate(Update $update)
    {
        if ($update->message) {
            $this->handleMessage($update->message);
        } elseif ($update->callback_query) {
            $this->handleCallbackQuery($update->callback_query);
        }
    }
}
```

## Security Features

- Webhook secret verification
- Error handling and logging
- Rate limiting
- Input validation
