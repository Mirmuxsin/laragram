---
layout: default
title: sendMediaGroup
---

# sendMediaGroup

Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of [Messages](https://core.telegram.org/bots/api/#message) that were sent is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::sendMediaGroup($business_connection_id = null, $chat_id, $message_thread_id = null, $media, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message will be sent
- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_thread_id** (`integer|null`): Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
- **$media** (`array`): A JSON-serialized array describing messages to be sent, must include 2-10 items
- **$disable_notification** (`bool|null`): Sends messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
- **$protect_content** (`bool|null`): Protects the contents of the sent messages from forwarding and saving
- **$allow_paid_broadcast** (`bool|null`): Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
- **$message_effect_id** (`string|null`): Unique identifier of the message effect to be added to the message; for private chats only
- **$reply_parameters** (`ReplyParameters|null`): Description of the message to reply to


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of sendMediaGroup
$result = Laragram::sendMediaGroup($business_connection_id = null, $chat_id, $message_thread_id = null, $media, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null);

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
