---
layout: default
title: getChatMember
---

# getChatMember

Use this method to get information about a member of a chat. The method is only guaranteed to work for other users if the bot is an administrator in the chat. Returns a [ChatMember](https://core.telegram.org/bots/api/#chatmember) object on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getChatMember($chat_id, $user_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
- **$user_id** (`integer`): Unique identifier of the target user


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getChatMember
$result = Laragram::getChatMember($chat_id, $user_id);

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
