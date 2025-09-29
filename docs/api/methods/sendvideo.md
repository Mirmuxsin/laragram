---
layout: default
title: sendVideo
---

# sendVideo

Use this method to send video files, Telegram clients support MPEG4 videos (other formats may be sent as [Document](https://core.telegram.org/bots/api/#document)). On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned. Bots can currently send video files of up to 50 MB in size, this limit may be changed in the future.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::sendVideo($business_connection_id = null, $chat_id, $message_thread_id = null, $video, $duration = null, $width = null, $height = null, $thumbnail = null, $cover = null, $start_timestamp = null, $caption = null, $parse_mode = null, $caption_entities = null, $show_caption_above_media = null, $has_spoiler = null, $supports_streaming = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null, $reply_markup = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message will be sent
- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_thread_id** (`integer|null`): Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
- **$video** (`any_of`): Video to send. Pass a file\_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
- **$duration** (`integer|null`): Duration of sent video in seconds
- **$width** (`integer|null`): Video width
- **$height** (`integer|null`): Video height
- **$thumbnail** (`any_of|null`): Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
- **$cover** (`any_of|null`): Cover for the video in the message. Pass a file\_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://\<file\_attach\_name\>” to upload a new one using multipart/form-data under \<file\_attach\_name\> name. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
- **$start_timestamp** (`integer|null`): Start timestamp for the video in the message
- **$caption** (`string|null`): Video caption (may also be used when resending videos by *file\_id*), 0-1024 characters after entities parsing
- **$parse_mode** (`string|null`): Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
- **$caption_entities** (`array|null`): A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
- **$show_caption_above_media** (`bool|null`): Pass *True*, if the caption must be shown above the message media
- **$has_spoiler** (`bool|null`): Pass *True* if the video needs to be covered with a spoiler animation
- **$supports_streaming** (`bool|null`): Pass *True* if the uploaded video is suitable for streaming
- **$disable_notification** (`bool|null`): Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
- **$protect_content** (`bool|null`): Protects the contents of the sent message from forwarding and saving
- **$allow_paid_broadcast** (`bool|null`): Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
- **$message_effect_id** (`string|null`): Unique identifier of the message effect to be added to the message; for private chats only
- **$reply_parameters** (`ReplyParameters|null`): Description of the message to reply to
- **$reply_markup** (`any_of|null`): Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of sendVideo
$result = Laragram::sendVideo($business_connection_id = null, $chat_id, $message_thread_id = null, $video, $duration = null, $width = null, $height = null, $thumbnail = null, $cover = null, $start_timestamp = null, $caption = null, $parse_mode = null, $caption_entities = null, $show_caption_above_media = null, $has_spoiler = null, $supports_streaming = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null, $reply_markup = null);

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
