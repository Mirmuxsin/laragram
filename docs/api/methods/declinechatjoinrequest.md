---
layout: default
title: declineChatJoinRequest
---

# declineChatJoinRequest

Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the *can\_invite\_users* administrator right. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::declineChatJoinRequest($chat_id, $user_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$user_id** (`integer`): Unique identifier of the target user


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of declineChatJoinRequest
$result = Laragram::declineChatJoinRequest($chat_id, $user_id);

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
