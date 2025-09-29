---
layout: default
title: unbanChatSenderChat
---

# unbanChatSenderChat

Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::unbanChatSenderChat($chat_id, $sender_chat_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$sender_chat_id** (`integer`): Unique identifier of the target sender chat


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of unbanChatSenderChat
$result = Laragram::unbanChatSenderChat($chat_id, $sender_chat_id);

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
