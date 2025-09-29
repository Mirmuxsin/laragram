---
layout: default
title: banChatSenderChat
---

# banChatSenderChat

Use this method to ban a channel chat in a supergroup or a channel. Until the chat is [unbanned](https://core.telegram.org/bots/api/#unbanchatsenderchat), the owner of the banned chat won't be able to send messages on behalf of **any of their channels**. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::banChatSenderChat($chat_id, $sender_chat_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$sender_chat_id** (`integer`): Unique identifier of the target sender chat


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of banChatSenderChat
$result = Laragram::banChatSenderChat($chat_id, $sender_chat_id);

if ($result['ok']) {
    // Success
    $data = $result['result'];
} else {
    // Error
    $error = $result['description'];
}
```

---
*Generated for Telegram Bot API v8*
