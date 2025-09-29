---
layout: default
title: copyMessage
---

# copyMessage

Use this method to copy messages of any kind. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz [poll](https://core.telegram.org/bots/api/#poll) can be copied only if the value of the field *correct\_option\_id* is known to the bot. The method is analogous to the method [forwardMessage](https://core.telegram.org/bots/api/#forwardmessage), but the copied message doesn't have a link to the original message. Returns the [MessageId](https://core.telegram.org/bots/api/#messageid) of the sent message on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::copyMessage($chat_id, $message_thread_id = null, $from_chat_id, $message_id, $video_start_timestamp = null, $caption = null, $parse_mode = null, $caption_entities = null, $show_caption_above_media = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $reply_parameters = null, $reply_markup = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_thread_id** (`integer|null`): Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
- **$from_chat_id** (`any_of`): Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
- **$message_id** (`integer`): Message identifier in the chat specified in *from\_chat\_id*
- **$video_start_timestamp** (`integer|null`): New start timestamp for the copied video in the message
- **$caption** (`string|null`): New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept
- **$parse_mode** (`string|null`): Mode for parsing entities in the new caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
- **$caption_entities** (`array|null`): A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of *parse\_mode*
- **$show_caption_above_media** (`bool|null`): Pass *True*, if the caption must be shown above the message media. Ignored if a new caption isn't specified.
- **$disable_notification** (`bool|null`): Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
- **$protect_content** (`bool|null`): Protects the contents of the sent message from forwarding and saving
- **$allow_paid_broadcast** (`bool|null`): Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
- **$reply_parameters** (`ReplyParameters|null`): Description of the message to reply to
- **$reply_markup** (`any_of|null`): Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of copyMessage
$result = Laragram::copyMessage($chat_id, $message_thread_id = null, $from_chat_id, $message_id, $video_start_timestamp = null, $caption = null, $parse_mode = null, $caption_entities = null, $show_caption_above_media = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $reply_parameters = null, $reply_markup = null);

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
