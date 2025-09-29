---
layout: default
title: unbanChatMember
---

# unbanChatMember

Use this method to unban a previously banned user in a supergroup or channel. The user will **not** return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be **removed** from the chat. If you don't want this, use the parameter *only\_if\_banned*. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::unbanChatMember($chat_id, $user_id, $only_if_banned = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)
- **$user_id** (`integer`): Unique identifier of the target user
- **$only_if_banned** (`bool|null`): Do nothing if the user is not banned


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of unbanChatMember
$result = Laragram::unbanChatMember($chat_id, $user_id, $only_if_banned = null);

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
