---
layout: default
title: editChatSubscriptionInviteLink
---

# editChatSubscriptionInviteLink

Use this method to edit a subscription invite link created by the bot. The bot must have the *can\_invite\_users* administrator rights. Returns the edited invite link as a [ChatInviteLink](https://core.telegram.org/bots/api/#chatinvitelink) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::editChatSubscriptionInviteLink($chat_id, $invite_link, $name = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$invite_link** (`string`): The invite link to edit
- **$name** (`string|null`): Invite link name; 0-32 characters


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of editChatSubscriptionInviteLink
$result = Laragram::editChatSubscriptionInviteLink($chat_id, $invite_link, $name = null);

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
