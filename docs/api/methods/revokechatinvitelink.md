---
layout: default
title: revokeChatInviteLink
---

# revokeChatInviteLink

Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as [ChatInviteLink](https://core.telegram.org/bots/api/#chatinvitelink) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::revokeChatInviteLink($chat_id, $invite_link);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier of the target chat or username of the target channel (in the format `@channelusername`)
- **$invite_link** (`string`): The invite link to revoke


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of revokeChatInviteLink
$result = Laragram::revokeChatInviteLink($chat_id, $invite_link);

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
