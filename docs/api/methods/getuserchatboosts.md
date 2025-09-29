---
layout: default
title: getUserChatBoosts
---

# getUserChatBoosts

Use this method to get the list of boosts added to a chat by a user. Requires administrator rights in the chat. Returns a [UserChatBoosts](https://core.telegram.org/bots/api/#userchatboosts) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getUserChatBoosts($chat_id, $user_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the chat or username of the channel (in the format `@channelusername`)
- **$user_id** (`integer`): Unique identifier of the target user


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getUserChatBoosts
$result = Laragram::getUserChatBoosts($chat_id, $user_id);

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
