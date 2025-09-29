---
layout: default
title: setMessageReaction
---

# setMessageReaction

Use this method to change the chosen reactions on a message. Service messages of some types can't be reacted to. Automatically forwarded messages from a channel to its discussion group have the same available reactions as messages in the channel. Bots can't use paid reactions. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setMessageReaction($chat_id, $message_id, $reaction = null, $is_big = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_id** (`integer`): Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.
- **$reaction** (`array|null`): A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators. Paid reactions can't be used by bots.
- **$is_big** (`bool|null`): Pass *True* to set the reaction with a big animation


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setMessageReaction
$result = Laragram::setMessageReaction($chat_id, $message_id, $reaction = null, $is_big = null);

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
