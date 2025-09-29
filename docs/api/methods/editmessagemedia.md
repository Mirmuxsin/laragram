---
layout: default
title: editMessageMedia
---

# editMessageMedia

Use this method to edit animation, audio, document, photo, or video messages, or to add media to text messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file\_id or specify a URL. On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned. Note that business messages that were not sent by the bot and do not contain an inline keyboard can only be edited within **48 hours** from the time they were sent.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::editMessageMedia($business_connection_id = null, $chat_id = null, $message_id = null, $inline_message_id = null, $media, $reply_markup = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message to be edited was sent
- **$chat_id** (`any_of|null`): Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_id** (`integer|null`): Required if *inline\_message\_id* is not specified. Identifier of the message to edit
- **$inline_message_id** (`string|null`): Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
- **$media** (`InputMedia`): A JSON-serialized object for a new media content of the message
- **$reply_markup** (`InlineKeyboardMarkup|null`): A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of editMessageMedia
$result = Laragram::editMessageMedia($business_connection_id = null, $chat_id = null, $message_id = null, $inline_message_id = null, $media, $reply_markup = null);

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
