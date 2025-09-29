---
layout: default
title: banChatMember
---

# banChatMember

Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless [unbanned](https://core.telegram.org/bots/api/#unbanchatmember) first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::banChatMember($chat_id, $user_id, $until_date = null, $revoke_messages = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)
- **$user_id** (`integer`): Unique identifier of the target user
- **$until_date** (`integer|null`): Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
- **$revoke_messages** (`bool|null`): Pass *True* to delete all messages from the chat for the user that is being removed. If *False*, the user will be able to see messages in the group that were sent before the user was removed. Always *True* for supergroups and channels.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of banChatMember
$result = Laragram::banChatMember($chat_id, $user_id, $until_date = null, $revoke_messages = null);

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
