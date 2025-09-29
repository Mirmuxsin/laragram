---
layout: default
title: createChatInviteLink
---

# createChatInviteLink

Use this method to create an additional invite link for a chat. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. The link can be revoked using the method [revokeChatInviteLink](https://core.telegram.org/bots/api/#revokechatinvitelink). Returns the new invite link as [ChatInviteLink](https://core.telegram.org/bots/api/#chatinvitelink) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::createChatInviteLink($chat_id, $name = null, $expire_date = null, $member_limit = null, $creates_join_request = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$name** (`string|null`): Invite link name; 0-32 characters
- **$expire_date** (`integer|null`): Point in time (Unix timestamp) when the link will expire
- **$member_limit** (`integer|null`): The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
- **$creates_join_request** (`bool|null`): *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of createChatInviteLink
$result = Laragram::createChatInviteLink($chat_id, $name = null, $expire_date = null, $member_limit = null, $creates_join_request = null);

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
