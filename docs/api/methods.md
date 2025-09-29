---
layout: default
title: Methods Reference
---

# Methods Reference

Complete reference for all 135 Telegram Bot API methods.

## Core Methods

### sendMessage
Send a text message to a chat.

```php
Laragram::sendMessage(
    chat_id: $chatId,
    message_thread_id: $messageThreadId,
    text: $text,
    parse_mode: 'HTML',
    reply_markup: $keyboard
);
```

### getUpdates
Get incoming updates.

```php
$updates = Laragram::getUpdates(
    offset: $offset,
    limit: 100,
    timeout: 30
);
```

### setWebhook
Set webhook for receiving updates.

```php
Laragram::setWebhook(
    url: $webhookUrl,
    secret_token: $secretToken
);
```

## Media Methods

### sendPhoto
Send a photo to a chat.

```php
Laragram::sendPhoto(
    chat_id: $chatId,
    photo: $photoFile,
    caption: $caption
);
```

### sendDocument
Send a document to a chat.

```php
Laragram::sendDocument(
    chat_id: $chatId,
    document: $documentFile,
    caption: $caption
);
```

## Complete Method List

For detailed documentation of all methods, see individual method pages:

- [sendMessage](methods/sendmessage.md)
- [getUpdates](methods/getupdates.md)
- [setWebhook](methods/setwebhook.md)
- [sendPhoto](methods/sendphoto.md)
- [sendDocument](methods/senddocument.md)
- ... and 135 more methods

---
*Generated for Telegram Bot API v8*
