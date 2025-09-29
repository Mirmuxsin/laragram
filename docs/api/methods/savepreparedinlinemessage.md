---
layout: default
title: savePreparedInlineMessage
---

# savePreparedInlineMessage

Stores a message that can be sent by a user of a Mini App. Returns a [PreparedInlineMessage](https://core.telegram.org/bots/api/#preparedinlinemessage) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::savePreparedInlineMessage($user_id, $result, $allow_user_chats = null, $allow_bot_chats = null, $allow_group_chats = null, $allow_channel_chats = null);
```

## Parameters

- **$user_id** (`integer`): Unique identifier of the target user that can use the prepared message
- **$result** (`InlineQueryResult`): A JSON-serialized object describing the message to be sent
- **$allow_user_chats** (`bool|null`): Pass *True* if the message can be sent to private chats with users
- **$allow_bot_chats** (`bool|null`): Pass *True* if the message can be sent to private chats with bots
- **$allow_group_chats** (`bool|null`): Pass *True* if the message can be sent to group and supergroup chats
- **$allow_channel_chats** (`bool|null`): Pass *True* if the message can be sent to channel chats


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of savePreparedInlineMessage
$result = Laragram::savePreparedInlineMessage($user_id, $result, $allow_user_chats = null, $allow_bot_chats = null, $allow_group_chats = null, $allow_channel_chats = null);

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
