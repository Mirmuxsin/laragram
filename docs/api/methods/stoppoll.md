---
layout: default
title: stopPoll
---

# stopPoll

Use this method to stop a poll which was sent by the bot. On success, the stopped [Poll](https://core.telegram.org/bots/api/#poll) is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::stopPoll($business_connection_id = null, $chat_id, $message_id, $reply_markup = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message to be edited was sent
- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_id** (`integer`): Identifier of the original message with the poll
- **$reply_markup** (`InlineKeyboardMarkup|null`): A JSON-serialized object for a new message [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of stopPoll
$result = Laragram::stopPoll($business_connection_id = null, $chat_id, $message_id, $reply_markup = null);

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
