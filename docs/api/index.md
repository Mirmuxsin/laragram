---
layout: default
title: API Reference
---

# API Reference

Laragram provides complete access to the Telegram Bot API with 135 methods and 232 types.

## Methods

All Telegram Bot API methods are available through the `Laragram` facade:

```php
use Milly\Laragram\Laragram;

// Send message
Laragram::sendMessage($chatId, $messageThreadId, $text);

// Get updates
$updates = Laragram::getUpdates();

// Set webhook
Laragram::setWebhook($url);
```

## Types

All Telegram API objects are available as strongly typed classes:

```php
use Milly\Laragram\Types\Message;
use Milly\Laragram\Types\User;
use Milly\Laragram\Types\Chat;

function handleMessage(Message $message) {
    $user = $message->from;
    $chat = $message->chat;
    
    echo "User: " . $user->first_name;
    echo "Chat: " . $chat->title;
}
```

## Documentation

- [Methods](methods.md) - Complete method reference
- [Types](types.md) - All available types
- [Examples](../examples/basic-bot.md) - Usage examples

---
*Generated for Telegram Bot API v8*
