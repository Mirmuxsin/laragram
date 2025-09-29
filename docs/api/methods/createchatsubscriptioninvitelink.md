---
layout: default
title: createChatSubscriptionInviteLink
---

# createChatSubscriptionInviteLink

Use this method to create a [subscription invite link](https://telegram.org/blog/superchannels-star-reactions-subscriptions#star-subscriptions) for a channel chat. The bot must have the *can\_invite\_users* administrator rights. The link can be edited using the method [editChatSubscriptionInviteLink](https://core.telegram.org/bots/api/#editchatsubscriptioninvitelink) or revoked using the method [revokeChatInviteLink](https://core.telegram.org/bots/api/#revokechatinvitelink). Returns the new invite link as a [ChatInviteLink](https://core.telegram.org/bots/api/#chatinvitelink) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::createChatSubscriptionInviteLink($chat_id, $name = null, $subscription_period, $subscription_price);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target channel chat or username of the target channel (in the format `@channelusername`)
- **$name** (`string|null`): Invite link name; 0-32 characters
- **$subscription_period** (`integer`): The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).
- **$subscription_price** (`integer`): The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-2500


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of createChatSubscriptionInviteLink
$result = Laragram::createChatSubscriptionInviteLink($chat_id, $name = null, $subscription_period, $subscription_price);

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
