---
layout: default
title: sendPaidMedia
---

# sendPaidMedia

Use this method to send paid media. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::sendPaidMedia($business_connection_id = null, $chat_id, $star_count, $media, $payload = null, $caption = null, $parse_mode = null, $caption_entities = null, $show_caption_above_media = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $reply_parameters = null, $reply_markup = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message will be sent
- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`). If the chat is a channel, all Telegram Star proceeds from this media will be credited to the chat's balance. Otherwise, they will be credited to the bot's balance.
- **$star_count** (`integer`): The number of Telegram Stars that must be paid to buy access to the media; 1-2500
- **$media** (`array`): A JSON-serialized array describing the media to be sent; up to 10 items
- **$payload** (`string|null`): Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your internal processes.
- **$caption** (`string|null`): Media caption, 0-1024 characters after entities parsing
- **$parse_mode** (`string|null`): Mode for parsing entities in the media caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
- **$caption_entities** (`array|null`): A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
- **$show_caption_above_media** (`bool|null`): Pass *True*, if the caption must be shown above the message media
- **$disable_notification** (`bool|null`): Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
- **$protect_content** (`bool|null`): Protects the contents of the sent message from forwarding and saving
- **$allow_paid_broadcast** (`bool|null`): Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
- **$reply_parameters** (`ReplyParameters|null`): Description of the message to reply to
- **$reply_markup** (`any_of|null`): Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of sendPaidMedia
$result = Laragram::sendPaidMedia($business_connection_id = null, $chat_id, $star_count, $media, $payload = null, $caption = null, $parse_mode = null, $caption_entities = null, $show_caption_above_media = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $reply_parameters = null, $reply_markup = null);

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
