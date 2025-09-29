---
layout: default
title: Types Reference
---

# Types Reference

Complete reference for all 232 Telegram API types.

## Core Types

### Update
Represents an incoming update.

```php
use Milly\Laragram\Types\Update;

$update = new Update();
if ($update->message) {
    // Handle message
} elseif ($update->callback_query) {
    // Handle callback query
}
```

### Message
Represents a message.

```php
use Milly\Laragram\Types\Message;

function handleMessage(Message $message) {
    $text = $message->text;
    $chatId = $message->chat->id;
    $userId = $message->from->id;
}
```

### User
Represents a user or bot.

```php
use Milly\Laragram\Types\User;

function handleUser(User $user) {
    $firstName = $user->first_name;
    $username = $user->username;
    $isBot = $user->is_bot;
}
```

## Media Types

### PhotoSize
Represents one size of a photo.

```php
use Milly\Laragram\Types\PhotoSize;

function handlePhoto(array $photoSizes) {
    foreach ($photoSizes as $photoSize) {
        $width = $photoSize->width;
        $height = $photoSize->height;
        $fileId = $photoSize->file_id;
    }
}
```

## Union Types

### MaybeInaccessibleMessage
A message that can be inaccessible to the bot.

```php
use Milly\Laragram\Types\MaybeInaccessibleMessage;

function handleMaybeMessage(MaybeInaccessibleMessage $maybeMessage) {
    if ($maybeMessage->type === 'Message') {
        $message = $maybeMessage->message;
        // Handle regular message
    } elseif ($maybeMessage->type === 'InaccessibleMessage') {
        $inaccessibleMessage = $maybeMessage->inaccessibleMessage;
        // Handle inaccessible message
    }
}
```

## Complete Type List

All 232 types are available with full type safety and IDE support.

---
*Generated for Telegram Bot API v8*
