---
layout: default
title: forwardMessage
---

# forwardMessage

Use this method to forward messages of any kind. Service messages and messages with protected content can't be forwarded. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::forwardMessage($chat_id, $message_thread_id = null, $from_chat_id, $video_start_timestamp = null, $disable_notification = null, $protect_content = null, $message_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_thread_id** (`integer|null`): Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
- **$from_chat_id** (`any_of`): Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
- **$video_start_timestamp** (`integer|null`): New start timestamp for the forwarded video in the message
- **$disable_notification** (`bool|null`): Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
- **$protect_content** (`bool|null`): Protects the contents of the forwarded message from forwarding and saving
- **$message_id** (`integer`): Message identifier in the chat specified in *from\_chat\_id*


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of forwardMessage
$result = Laragram::forwardMessage($chat_id, $message_thread_id = null, $from_chat_id, $video_start_timestamp = null, $disable_notification = null, $protect_content = null, $message_id);

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
