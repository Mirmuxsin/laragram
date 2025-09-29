---
layout: default
title: stopMessageLiveLocation
---

# stopMessageLiveLocation

Use this method to stop updating a live location message before *live\_period* expires. On success, if the message is not an inline message, the edited [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::stopMessageLiveLocation($business_connection_id = null, $chat_id = null, $message_id = null, $inline_message_id = null, $reply_markup = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message to be edited was sent
- **$chat_id** (`any_of|null`): Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_id** (`integer|null`): Required if *inline\_message\_id* is not specified. Identifier of the message with live location to stop
- **$inline_message_id** (`string|null`): Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
- **$reply_markup** (`InlineKeyboardMarkup|null`): A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of stopMessageLiveLocation
$result = Laragram::stopMessageLiveLocation($business_connection_id = null, $chat_id = null, $message_id = null, $inline_message_id = null, $reply_markup = null);

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
