---
layout: default
title: Basic Bot Example
---

# Basic Bot Example

A simple echo bot that responds to messages.

## Implementation

```php
<?php

use Milly\Laragram\Laragram;
use Milly\Laragram\Types\Update;
use Milly\Laragram\Types\Message;

// Webhook endpoint
Route::post('/bot', function () {
    $update = new Update();
    
    if ($update->message) {
        $message = $update->message;
        
        // Echo the message back
        Laragram::sendMessage(
            chat_id: $message->chat->id,
            message_thread_id: $message->message_thread_id,
            text: "You said: " . $message->text
        );
    }
    
    return response()->json(['ok' => true]);
});
```

## Features

- Responds to all text messages
- Echoes user input
- Handles both private and group chats
- Thread-safe for supergroups

## Testing

1. Set webhook: `Laragram::setWebhook('https://yourdomain.com/bot')`
2. Send a message to your bot
3. Bot should echo your message back
