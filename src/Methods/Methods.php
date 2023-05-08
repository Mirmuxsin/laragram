<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;


/**
 * Telegram methods
 *
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either URL query string or application/json or application/x-www-form-urlencoded or multipart/form-data for passing parameters in Bot API requests.
On successful call, a JSON-object containing the result will be returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api#available-methods
 */
class Methods
{
     /**
     * @var integer offset  Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as [getUpdates](https://core.telegram.org/bots/api/#getupdates) is called with an *offset* higher than its *update\_id*. The negative offset can be specified to retrieve updates starting from *-offset* update from the end of the updates queue. All previous updates will forgotten.
     * @var integer limit *(default: 100)* Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * @var integer timeout *(default: 0)* Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
     * @var array allowed_updates  A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”, “edited\_channel\_post”, “callback\_query”] to only receive updates of these types. See [Update](https://core.telegram.org/bots/api/#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member* (default). If not specified, the previous setting will be used.  

Please note that this parameter doesn't affect updates created before the call to the getUpdates, so unwanted updates may be received for a short period of time.
     * */

    public static function getUpdates ($offset, $limit, $timeout, $allowed_updates, ) {
        return Laragram::request('getUpdates', func_get_args());
    }

     /**
     * @var string url *(required: true)* HTTPS URL to send updates to. Use an empty string to remove webhook integration
     * @var \Milly\Laragram\Types\InputFile certificate  Upload your public key certificate so that the root certificate in use can be checked. See our [self-signed guide](https://core.telegram.org/bots/self-signed) for details.
     * @var string ip_address  The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
     * @var integer max_connections *(default: 40)* The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to *40*. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
     * @var array allowed_updates  A JSON-serialized list of the update types you want your bot to receive. For example, specify [“message”, “edited\_channel\_post”, “callback\_query”] to only receive updates of these types. See [Update](https://core.telegram.org/bots/api/#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member* (default). If not specified, the previous setting will be used.  
Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
     * @var bool drop_pending_updates  Pass *True* to drop all pending updates
     * @var string secret_token *(min length: 1)**(max length: 1)* A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed. The header is useful to ensure that the request comes from a webhook set by you.
     * */

    public static function setWebhook ($url, $certificate, $ip_address, $max_connections, $allowed_updates, $drop_pending_updates, $secret_token, ) {
        return Laragram::request('setWebhook', func_get_args());
    }

     /**
     * @var bool drop_pending_updates  Pass *True* to drop all pending updates
     * */

    public static function deleteWebhook ($drop_pending_updates, ) {
        return Laragram::request('deleteWebhook', func_get_args());
    }


    public static function getWebhookInfo () {
        return Laragram::request('getWebhookInfo', func_get_args());
    }


    public static function getMe () {
        return Laragram::request('getMe', func_get_args());
    }


    public static function logOut () {
        return Laragram::request('logOut', func_get_args());
    }


    public static function close () {
        return Laragram::request('close', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string text *(required: true)**(min length: 1)**(max length: 1)* Text of the message to be sent, 1-4096 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array entities  A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse\_mode*
     * @var bool disable_web_page_preview  Disables link previews for links in this message
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendMessage (int|string $chat_id, $message_thread_id, $text, $parse_mode, $entities, $disable_web_page_preview, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendMessage', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|string  from_chat_id *(required: true)* Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the forwarded message from forwarding and saving
     * @var integer message_id *(required: true)* Message identifier in the chat specified in *from\_chat\_id*
     * */

    public static function forwardMessage (int|string $chat_id, $message_thread_id, int|string $from_chat_id, $disable_notification, $protect_content, $message_id, ) {
        return Laragram::request('forwardMessage', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var int|string  from_chat_id *(required: true)* Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
     * @var integer message_id *(required: true)* Message identifier in the chat specified in *from\_chat\_id*
     * @var string caption *(min length: 0)**(max length: 0)* New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept
     * @var string parse_mode  Mode for parsing entities in the new caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of *parse\_mode*
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function copyMessage (int|string $chat_id, $message_thread_id, int|string $from_chat_id, $message_id, $caption, $parse_mode, $caption_entities, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('copyMessage', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var \Milly\Laragram\Types\InputFile|string  photo *(required: true)* Photo to send. Pass a file\_id as String to send a photo that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a photo from the Internet, or upload a new photo using multipart/form-data. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var string caption *(min length: 0)**(max length: 0)* Photo caption (may also be used when resending photos by *file\_id*), 0-1024 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the photo caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool has_spoiler  Pass *True* if the photo needs to be covered with a spoiler animation
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendPhoto (int|string $chat_id, $message_thread_id, \Milly\Laragram\Types\InputFile|string $photo, $caption, $parse_mode, $caption_entities, $has_spoiler, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendPhoto', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var \Milly\Laragram\Types\InputFile|string  audio *(required: true)* Audio file to send. Pass a file\_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var string caption *(min length: 0)**(max length: 0)* Audio caption, 0-1024 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the audio caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var integer duration  Duration of the audio in seconds
     * @var string performer  Performer
     * @var string title  Track name
     * @var \Milly\Laragram\Types\InputFile|string  thumbnail  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendAudio (int|string $chat_id, $message_thread_id, \Milly\Laragram\Types\InputFile|string $audio, $caption, $parse_mode, $caption_entities, $duration, $performer, $title, \Milly\Laragram\Types\InputFile|string $thumbnail, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendAudio', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var \Milly\Laragram\Types\InputFile|string  document *(required: true)* File to send. Pass a file\_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var \Milly\Laragram\Types\InputFile|string  thumbnail  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var string caption *(min length: 0)**(max length: 0)* Document caption (may also be used when resending documents by *file\_id*), 0-1024 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the document caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool disable_content_type_detection  Disables automatic server-side content type detection for files uploaded using multipart/form-data
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendDocument (int|string $chat_id, $message_thread_id, \Milly\Laragram\Types\InputFile|string $document, \Milly\Laragram\Types\InputFile|string $thumbnail, $caption, $parse_mode, $caption_entities, $disable_content_type_detection, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendDocument', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var \Milly\Laragram\Types\InputFile|string  video *(required: true)* Video to send. Pass a file\_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var integer duration  Duration of sent video in seconds
     * @var integer width  Video width
     * @var integer height  Video height
     * @var \Milly\Laragram\Types\InputFile|string  thumbnail  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var string caption *(min length: 0)**(max length: 0)* Video caption (may also be used when resending videos by *file\_id*), 0-1024 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool has_spoiler  Pass *True* if the video needs to be covered with a spoiler animation
     * @var bool supports_streaming  Pass *True* if the uploaded video is suitable for streaming
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendVideo (int|string $chat_id, $message_thread_id, \Milly\Laragram\Types\InputFile|string $video, $duration, $width, $height, \Milly\Laragram\Types\InputFile|string $thumbnail, $caption, $parse_mode, $caption_entities, $has_spoiler, $supports_streaming, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendVideo', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var \Milly\Laragram\Types\InputFile|string  animation *(required: true)* Animation to send. Pass a file\_id as String to send an animation that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an animation from the Internet, or upload a new animation using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var integer duration  Duration of sent animation in seconds
     * @var integer width  Animation width
     * @var integer height  Animation height
     * @var \Milly\Laragram\Types\InputFile|string  thumbnail  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var string caption *(min length: 0)**(max length: 0)* Animation caption (may also be used when resending animation by *file\_id*), 0-1024 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the animation caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool has_spoiler  Pass *True* if the animation needs to be covered with a spoiler animation
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendAnimation (int|string $chat_id, $message_thread_id, \Milly\Laragram\Types\InputFile|string $animation, $duration, $width, $height, \Milly\Laragram\Types\InputFile|string $thumbnail, $caption, $parse_mode, $caption_entities, $has_spoiler, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendAnimation', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var \Milly\Laragram\Types\InputFile|string  voice *(required: true)* Audio file to send. Pass a file\_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var string caption *(min length: 0)**(max length: 0)* Voice message caption, 0-1024 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the voice message caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var integer duration  Duration of the voice message in seconds
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendVoice (int|string $chat_id, $message_thread_id, \Milly\Laragram\Types\InputFile|string $voice, $caption, $parse_mode, $caption_entities, $duration, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendVoice', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var \Milly\Laragram\Types\InputFile|string  video_note *(required: true)* Video note to send. Pass a file\_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files). Sending video notes by a URL is currently unsupported
     * @var integer duration  Duration of sent video in seconds
     * @var integer length  Video width and height, i.e. diameter of the video message
     * @var \Milly\Laragram\Types\InputFile|string  thumbnail  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendVideoNote (int|string $chat_id, $message_thread_id, \Milly\Laragram\Types\InputFile|string $video_note, $duration, $length, \Milly\Laragram\Types\InputFile|string $thumbnail, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendVideoNote', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var array media *(required: true)* A JSON-serialized array describing messages to be sent, must include 2-10 items
     * @var bool disable_notification  Sends messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent messages from forwarding and saving
     * @var integer reply_to_message_id  If the messages are a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * */

    public static function sendMediaGroup (int|string $chat_id, $message_thread_id, $media, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, ) {
        return Laragram::request('sendMediaGroup', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var float latitude *(required: true)* Latitude of the location
     * @var float longitude *(required: true)* Longitude of the location
     * @var float horizontal_accuracy  The radius of uncertainty for the location, measured in meters; 0-1500
     * @var integer live_period  Period in seconds for which the location will be updated (see [Live Locations](https://telegram.org/blog/live-locations), should be between 60 and 86400.
     * @var integer heading  For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @var integer proximity_alert_radius  For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendLocation (int|string $chat_id, $message_thread_id, $latitude, $longitude, $horizontal_accuracy, $live_period, $heading, $proximity_alert_radius, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendLocation', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var float latitude *(required: true)* Latitude of the venue
     * @var float longitude *(required: true)* Longitude of the venue
     * @var string title *(required: true)* Name of the venue
     * @var string address *(required: true)* Address of the venue
     * @var string foursquare_id  Foursquare identifier of the venue
     * @var string foursquare_type  Foursquare type of the venue, if known. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
     * @var string google_place_id  Google Places identifier of the venue
     * @var string google_place_type  Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendVenue (int|string $chat_id, $message_thread_id, $latitude, $longitude, $title, $address, $foursquare_id, $foursquare_type, $google_place_id, $google_place_type, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendVenue', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string phone_number *(required: true)* Contact's phone number
     * @var string first_name *(required: true)* Contact's first name
     * @var string last_name  Contact's last name
     * @var string vcard  Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendContact (int|string $chat_id, $message_thread_id, $phone_number, $first_name, $last_name, $vcard, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendContact', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string question *(required: true)**(min length: 1)**(max length: 1)* Poll question, 1-300 characters
     * @var array options *(required: true)* A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
     * @var bool is_anonymous  *True*, if the poll needs to be anonymous, defaults to *True*
     * @var string type  Poll type, “quiz” or “regular”, defaults to “regular”
     * @var bool allows_multiple_answers  *True*, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to *False*
     * @var integer correct_option_id  0-based identifier of the correct answer option, required for polls in quiz mode
     * @var string explanation *(min length: 0)**(max length: 0)* Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
     * @var string explanation_parse_mode  Mode for parsing entities in the explanation. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array explanation_entities  A JSON-serialized list of special entities that appear in the poll explanation, which can be specified instead of *parse\_mode*
     * @var integer open_period  Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with *close\_date*.
     * @var integer close_date  Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with *open\_period*.
     * @var bool is_closed  Pass *True* if the poll needs to be immediately closed. This can be useful for poll preview.
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendPoll (int|string $chat_id, $message_thread_id, $question, $options, $is_anonymous, $type, $allows_multiple_answers, $correct_option_id, $explanation, $explanation_parse_mode, $explanation_entities, $open_period, $close_date, $is_closed, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendPoll', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string emoji *(default: 🎲)* Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, “🎳”, or “🎰”. Dice can have values 1-6 for “🎲”, “🎯” and “🎳”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”. Defaults to “🎲”
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendDice (int|string $chat_id, $message_thread_id, $emoji, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendDice', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread; supergroups only
     * @var string action *(required: true)* Type of action to broadcast. Choose one, depending on what the user is about to receive: *typing* for [text messages](https://core.telegram.org/bots/api/#sendmessage), *upload\_photo* for [photos](https://core.telegram.org/bots/api/#sendphoto), *record\_video* or *upload\_video* for [videos](https://core.telegram.org/bots/api/#sendvideo), *record\_voice* or *upload\_voice* for [voice notes](https://core.telegram.org/bots/api/#sendvoice), *upload\_document* for [general files](https://core.telegram.org/bots/api/#senddocument), *choose\_sticker* for [stickers](https://core.telegram.org/bots/api/#sendsticker), *find\_location* for [location data](https://core.telegram.org/bots/api/#sendlocation), *record\_video\_note* or *upload\_video\_note* for [video notes](https://core.telegram.org/bots/api/#sendvideonote).
     * */

    public static function sendChatAction (int|string $chat_id, $message_thread_id, $action, ) {
        return Laragram::request('sendChatAction', func_get_args());
    }

     /**
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var integer offset  Sequential number of the first photo to be returned. By default, all photos are returned.
     * @var integer limit *(default: 100)* Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * */

    public static function getUserProfilePhotos ($user_id, $offset, $limit, ) {
        return Laragram::request('getUserProfilePhotos', func_get_args());
    }

     /**
     * @var string file_id *(required: true)* File identifier to get information about
     * */

    public static function getFile ($file_id, ) {
        return Laragram::request('getFile', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var integer until_date  Date when the user will be unbanned, unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
     * @var bool revoke_messages  Pass *True* to delete all messages from the chat for the user that is being removed. If *False*, the user will be able to see messages in the group that were sent before the user was removed. Always *True* for supergroups and channels.
     * */

    public static function banChatMember (int|string $chat_id, $user_id, $until_date, $revoke_messages, ) {
        return Laragram::request('banChatMember', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var bool only_if_banned  Do nothing if the user is not banned
     * */

    public static function unbanChatMember (int|string $chat_id, $user_id, $only_if_banned, ) {
        return Laragram::request('unbanChatMember', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var \Milly\Laragram\Types\ChatPermissions permissions *(required: true)* A JSON-serialized object for new user permissions
     * @var bool use_independent_chat_permissions  Pass *True* if chat permissions are set independently. Otherwise, the *can\_send\_other\_messages* and *can\_add\_web\_page\_previews* permissions will imply the *can\_send\_messages*, *can\_send\_audios*, *can\_send\_documents*, *can\_send\_photos*, *can\_send\_videos*, *can\_send\_video\_notes*, and *can\_send\_voice\_notes* permissions; the *can\_send\_polls* permission will imply the *can\_send\_messages* permission.
     * @var integer until_date  Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
     * */

    public static function restrictChatMember (int|string $chat_id, $user_id, $permissions, $use_independent_chat_permissions, $until_date, ) {
        return Laragram::request('restrictChatMember', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var bool is_anonymous  Pass *True* if the administrator's presence in the chat is hidden
     * @var bool can_manage_chat  Pass *True* if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     * @var bool can_post_messages  Pass *True* if the administrator can create channel posts, channels only
     * @var bool can_edit_messages  Pass *True* if the administrator can edit messages of other users and can pin messages, channels only
     * @var bool can_delete_messages  Pass *True* if the administrator can delete messages of other users
     * @var bool can_manage_video_chats  Pass *True* if the administrator can manage video chats
     * @var bool can_restrict_members  Pass *True* if the administrator can restrict, ban or unban chat members
     * @var bool can_promote_members  Pass *True* if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)
     * @var bool can_change_info  Pass *True* if the administrator can change chat title, photo and other settings
     * @var bool can_invite_users  Pass *True* if the administrator can invite new users to the chat
     * @var bool can_pin_messages  Pass *True* if the administrator can pin messages, supergroups only
     * @var bool can_manage_topics  Pass *True* if the user is allowed to create, rename, close, and reopen forum topics, supergroups only
     * */

    public static function promoteChatMember (int|string $chat_id, $user_id, $is_anonymous, $can_manage_chat, $can_post_messages, $can_edit_messages, $can_delete_messages, $can_manage_video_chats, $can_restrict_members, $can_promote_members, $can_change_info, $can_invite_users, $can_pin_messages, $can_manage_topics, ) {
        return Laragram::request('promoteChatMember', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var string custom_title *(required: true)**(min length: 0)**(max length: 0)* New custom title for the administrator; 0-16 characters, emoji are not allowed
     * */

    public static function setChatAdministratorCustomTitle (int|string $chat_id, $user_id, $custom_title, ) {
        return Laragram::request('setChatAdministratorCustomTitle', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer sender_chat_id *(required: true)* Unique identifier of the target sender chat
     * */

    public static function banChatSenderChat (int|string $chat_id, $sender_chat_id, ) {
        return Laragram::request('banChatSenderChat', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer sender_chat_id *(required: true)* Unique identifier of the target sender chat
     * */

    public static function unbanChatSenderChat (int|string $chat_id, $sender_chat_id, ) {
        return Laragram::request('unbanChatSenderChat', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var \Milly\Laragram\Types\ChatPermissions permissions *(required: true)* A JSON-serialized object for new default chat permissions
     * @var bool use_independent_chat_permissions  Pass *True* if chat permissions are set independently. Otherwise, the *can\_send\_other\_messages* and *can\_add\_web\_page\_previews* permissions will imply the *can\_send\_messages*, *can\_send\_audios*, *can\_send\_documents*, *can\_send\_photos*, *can\_send\_videos*, *can\_send\_video\_notes*, and *can\_send\_voice\_notes* permissions; the *can\_send\_polls* permission will imply the *can\_send\_messages* permission.
     * */

    public static function setChatPermissions (int|string $chat_id, $permissions, $use_independent_chat_permissions, ) {
        return Laragram::request('setChatPermissions', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * */

    public static function exportChatInviteLink (int|string $chat_id, ) {
        return Laragram::request('exportChatInviteLink', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string name *(min length: 0)**(max length: 0)* Invite link name; 0-32 characters
     * @var integer expire_date  Point in time (Unix timestamp) when the link will expire
     * @var integer member_limit  The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @var bool creates_join_request  *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified
     * */

    public static function createChatInviteLink (int|string $chat_id, $name, $expire_date, $member_limit, $creates_join_request, ) {
        return Laragram::request('createChatInviteLink', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string invite_link *(required: true)* The invite link to edit
     * @var string name *(min length: 0)**(max length: 0)* Invite link name; 0-32 characters
     * @var integer expire_date  Point in time (Unix timestamp) when the link will expire
     * @var integer member_limit  The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @var bool creates_join_request  *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified
     * */

    public static function editChatInviteLink (int|string $chat_id, $invite_link, $name, $expire_date, $member_limit, $creates_join_request, ) {
        return Laragram::request('editChatInviteLink', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier of the target chat or username of the target channel (in the format `@channelusername`)
     * @var string invite_link *(required: true)* The invite link to revoke
     * */

    public static function revokeChatInviteLink (int|string $chat_id, $invite_link, ) {
        return Laragram::request('revokeChatInviteLink', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * */

    public static function approveChatJoinRequest (int|string $chat_id, $user_id, ) {
        return Laragram::request('approveChatJoinRequest', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * */

    public static function declineChatJoinRequest (int|string $chat_id, $user_id, ) {
        return Laragram::request('declineChatJoinRequest', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var \Milly\Laragram\Types\InputFile photo *(required: true)* New chat photo, uploaded using multipart/form-data
     * */

    public static function setChatPhoto (int|string $chat_id, $photo, ) {
        return Laragram::request('setChatPhoto', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * */

    public static function deleteChatPhoto (int|string $chat_id, ) {
        return Laragram::request('deleteChatPhoto', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string title *(required: true)**(min length: 1)**(max length: 1)* New chat title, 1-128 characters
     * */

    public static function setChatTitle (int|string $chat_id, $title, ) {
        return Laragram::request('setChatTitle', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string description *(min length: 0)**(max length: 0)* New chat description, 0-255 characters
     * */

    public static function setChatDescription (int|string $chat_id, $description, ) {
        return Laragram::request('setChatDescription', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id *(required: true)* Identifier of a message to pin
     * @var bool disable_notification  Pass *True* if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.
     * */

    public static function pinChatMessage (int|string $chat_id, $message_id, $disable_notification, ) {
        return Laragram::request('pinChatMessage', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Identifier of a message to unpin. If not specified, the most recent pinned message (by sending date) will be unpinned.
     * */

    public static function unpinChatMessage (int|string $chat_id, $message_id, ) {
        return Laragram::request('unpinChatMessage', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * */

    public static function unpinAllChatMessages (int|string $chat_id, ) {
        return Laragram::request('unpinAllChatMessages', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * */

    public static function leaveChat (int|string $chat_id, ) {
        return Laragram::request('leaveChat', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * */

    public static function getChat (int|string $chat_id, ) {
        return Laragram::request('getChat', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * */

    public static function getChatAdministrators (int|string $chat_id, ) {
        return Laragram::request('getChatAdministrators', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * */

    public static function getChatMemberCount (int|string $chat_id, ) {
        return Laragram::request('getChatMemberCount', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * */

    public static function getChatMember (int|string $chat_id, $user_id, ) {
        return Laragram::request('getChatMember', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var string sticker_set_name *(required: true)* Name of the sticker set to be set as the group sticker set
     * */

    public static function setChatStickerSet (int|string $chat_id, $sticker_set_name, ) {
        return Laragram::request('setChatStickerSet', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * */

    public static function deleteChatStickerSet (int|string $chat_id, ) {
        return Laragram::request('deleteChatStickerSet', func_get_args());
    }


    public static function getForumTopicIconStickers () {
        return Laragram::request('getForumTopicIconStickers', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var string name *(required: true)**(min length: 1)**(max length: 1)* Topic name, 1-128 characters
     * @var integer icon_color  Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
     * @var string icon_custom_emoji_id  Unique identifier of the custom emoji shown as the topic icon. Use [getForumTopicIconStickers](https://core.telegram.org/bots/api/#getforumtopiciconstickers) to get all allowed custom emoji identifiers.
     * */

    public static function createForumTopic (int|string $chat_id, $name, $icon_color, $icon_custom_emoji_id, ) {
        return Laragram::request('createForumTopic', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var integer message_thread_id *(required: true)* Unique identifier for the target message thread of the forum topic
     * @var string name *(min length: 0)**(max length: 0)* New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept
     * @var string icon_custom_emoji_id  New unique identifier of the custom emoji shown as the topic icon. Use [getForumTopicIconStickers](https://core.telegram.org/bots/api/#getforumtopiciconstickers) to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept
     * */

    public static function editForumTopic (int|string $chat_id, $message_thread_id, $name, $icon_custom_emoji_id, ) {
        return Laragram::request('editForumTopic', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var integer message_thread_id *(required: true)* Unique identifier for the target message thread of the forum topic
     * */

    public static function closeForumTopic (int|string $chat_id, $message_thread_id, ) {
        return Laragram::request('closeForumTopic', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var integer message_thread_id *(required: true)* Unique identifier for the target message thread of the forum topic
     * */

    public static function reopenForumTopic (int|string $chat_id, $message_thread_id, ) {
        return Laragram::request('reopenForumTopic', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var integer message_thread_id *(required: true)* Unique identifier for the target message thread of the forum topic
     * */

    public static function deleteForumTopic (int|string $chat_id, $message_thread_id, ) {
        return Laragram::request('deleteForumTopic', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var integer message_thread_id *(required: true)* Unique identifier for the target message thread of the forum topic
     * */

    public static function unpinAllForumTopicMessages (int|string $chat_id, $message_thread_id, ) {
        return Laragram::request('unpinAllForumTopicMessages', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var string name *(required: true)**(min length: 1)**(max length: 1)* New topic name, 1-128 characters
     * */

    public static function editGeneralForumTopic (int|string $chat_id, $name, ) {
        return Laragram::request('editGeneralForumTopic', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * */

    public static function closeGeneralForumTopic (int|string $chat_id, ) {
        return Laragram::request('closeGeneralForumTopic', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * */

    public static function reopenGeneralForumTopic (int|string $chat_id, ) {
        return Laragram::request('reopenGeneralForumTopic', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * */

    public static function hideGeneralForumTopic (int|string $chat_id, ) {
        return Laragram::request('hideGeneralForumTopic', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * */

    public static function unhideGeneralForumTopic (int|string $chat_id, ) {
        return Laragram::request('unhideGeneralForumTopic', func_get_args());
    }

     /**
     * @var string callback_query_id *(required: true)* Unique identifier for the query to be answered
     * @var string text *(min length: 0)**(max length: 0)* Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters
     * @var bool show_alert *(default: )* If *True*, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to *false*.
     * @var string url  URL that will be opened by the user's client. If you have created a [Game](https://core.telegram.org/bots/api/#game) and accepted the conditions via [@BotFather](https://t.me/botfather), specify the URL that opens your game - note that this will only work if the query comes from a [*callback\_game*](https://core.telegram.org/bots/api/#inlinekeyboardbutton) button.  

Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.
     * @var integer cache_time *(default: 0)* The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.
     * */

    public static function answerCallbackQuery ($callback_query_id, $text, $show_alert, $url, $cache_time, ) {
        return Laragram::request('answerCallbackQuery', func_get_args());
    }

     /**
     * @var array commands *(required: true)* A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     * @var \Milly\Laragram\Types\BotCommandScope scope  A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
     * @var string language_code  A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     * */

    public static function setMyCommands ($commands, $scope, $language_code, ) {
        return Laragram::request('setMyCommands', func_get_args());
    }

     /**
     * @var \Milly\Laragram\Types\BotCommandScope scope  A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
     * @var string language_code  A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     * */

    public static function deleteMyCommands ($scope, $language_code, ) {
        return Laragram::request('deleteMyCommands', func_get_args());
    }

     /**
     * @var \Milly\Laragram\Types\BotCommandScope scope  A JSON-serialized object, describing scope of users. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
     * @var string language_code  A two-letter ISO 639-1 language code or an empty string
     * */

    public static function getMyCommands ($scope, $language_code, ) {
        return Laragram::request('getMyCommands', func_get_args());
    }

     /**
     * @var string description *(min length: 0)**(max length: 0)* New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
     * @var string language_code  A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.
     * */

    public static function setMyDescription ($description, $language_code, ) {
        return Laragram::request('setMyDescription', func_get_args());
    }

     /**
     * @var string language_code  A two-letter ISO 639-1 language code or an empty string
     * */

    public static function getMyDescription ($language_code, ) {
        return Laragram::request('getMyDescription', func_get_args());
    }

     /**
     * @var string short_description *(min length: 0)**(max length: 0)* New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
     * @var string language_code  A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.
     * */

    public static function setMyShortDescription ($short_description, $language_code, ) {
        return Laragram::request('setMyShortDescription', func_get_args());
    }

     /**
     * @var string language_code  A two-letter ISO 639-1 language code or an empty string
     * */

    public static function getMyShortDescription ($language_code, ) {
        return Laragram::request('getMyShortDescription', func_get_args());
    }

     /**
     * @var integer chat_id  Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
     * @var \Milly\Laragram\Types\MenuButton menu_button  A JSON-serialized object for the bot's new menu button. Defaults to [MenuButtonDefault](https://core.telegram.org/bots/api/#menubuttondefault)
     * */

    public static function setChatMenuButton ($chat_id, $menu_button, ) {
        return Laragram::request('setChatMenuButton', func_get_args());
    }

     /**
     * @var integer chat_id  Unique identifier for the target private chat. If not specified, default bot's menu button will be returned
     * */

    public static function getChatMenuButton ($chat_id, ) {
        return Laragram::request('getChatMenuButton', func_get_args());
    }

     /**
     * @var \Milly\Laragram\Types\ChatAdministratorRights rights  A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
     * @var bool for_channels  Pass *True* to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
     * */

    public static function setMyDefaultAdministratorRights ($rights, $for_channels, ) {
        return Laragram::request('setMyDefaultAdministratorRights', func_get_args());
    }

     /**
     * @var bool for_channels  Pass *True* to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
     * */

    public static function getMyDefaultAdministratorRights ($for_channels, ) {
        return Laragram::request('getMyDefaultAdministratorRights', func_get_args());
    }

     /**
     * @var int|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var string text *(required: true)**(min length: 1)**(max length: 1)* New text of the message, 1-4096 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array entities  A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse\_mode*
     * @var bool disable_web_page_preview  Disables link previews for links in this message
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).
     * */

    public static function editMessageText (int|string $chat_id, $message_id, $inline_message_id, $text, $parse_mode, $entities, $disable_web_page_preview, $reply_markup, ) {
        return Laragram::request('editMessageText', func_get_args());
    }

     /**
     * @var int|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var string caption *(min length: 0)**(max length: 0)* New caption of the message, 0-1024 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the message caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).
     * */

    public static function editMessageCaption (int|string $chat_id, $message_id, $inline_message_id, $caption, $parse_mode, $caption_entities, $reply_markup, ) {
        return Laragram::request('editMessageCaption', func_get_args());
    }

     /**
     * @var int|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var \Milly\Laragram\Types\InputMedia media *(required: true)* A JSON-serialized object for a new media content of the message
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).
     * */

    public static function editMessageMedia (int|string $chat_id, $message_id, $inline_message_id, $media, $reply_markup, ) {
        return Laragram::request('editMessageMedia', func_get_args());
    }

     /**
     * @var int|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var float latitude *(required: true)* Latitude of new location
     * @var float longitude *(required: true)* Longitude of new location
     * @var float horizontal_accuracy  The radius of uncertainty for the location, measured in meters; 0-1500
     * @var integer heading  Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @var integer proximity_alert_radius  The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).
     * */

    public static function editMessageLiveLocation (int|string $chat_id, $message_id, $inline_message_id, $latitude, $longitude, $horizontal_accuracy, $heading, $proximity_alert_radius, $reply_markup, ) {
        return Laragram::request('editMessageLiveLocation', func_get_args());
    }

     /**
     * @var int|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message with live location to stop
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).
     * */

    public static function stopMessageLiveLocation (int|string $chat_id, $message_id, $inline_message_id, $reply_markup, ) {
        return Laragram::request('stopMessageLiveLocation', func_get_args());
    }

     /**
     * @var int|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).
     * */

    public static function editMessageReplyMarkup (int|string $chat_id, $message_id, $inline_message_id, $reply_markup, ) {
        return Laragram::request('editMessageReplyMarkup', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id *(required: true)* Identifier of the original message with the poll
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for a new message [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).
     * */

    public static function stopPoll (int|string $chat_id, $message_id, $reply_markup, ) {
        return Laragram::request('stopPoll', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id *(required: true)* Identifier of the message to delete
     * */

    public static function deleteMessage (int|string $chat_id, $message_id, ) {
        return Laragram::request('deleteMessage', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var \Milly\Laragram\Types\InputFile|string  sticker *(required: true)* Sticker to send. Pass a file\_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP sticker from the Internet, or upload a new .WEBP or .TGS sticker using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files). Video stickers can only be sent by a file\_id. Animated stickers can't be sent via an HTTP URL.
     * @var string emoji  Emoji associated with the sticker; only for just uploaded stickers
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * */

    public static function sendSticker (int|string $chat_id, $message_thread_id, \Milly\Laragram\Types\InputFile|string $sticker, $emoji, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply $reply_markup, ) {
        return Laragram::request('sendSticker', func_get_args());
    }

     /**
     * @var string name *(required: true)* Name of the sticker set
     * */

    public static function getStickerSet ($name, ) {
        return Laragram::request('getStickerSet', func_get_args());
    }

     /**
     * @var array custom_emoji_ids *(required: true)* List of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.
     * */

    public static function getCustomEmojiStickers ($custom_emoji_ids, ) {
        return Laragram::request('getCustomEmojiStickers', func_get_args());
    }

     /**
     * @var integer user_id *(required: true)* User identifier of sticker file owner
     * @var \Milly\Laragram\Types\InputFile sticker *(required: true)* A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See [https://core.telegram.org/stickers](https://core.telegram.org/stickers) for technical requirements. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var string sticker_format *(required: true)* Format of the sticker, must be one of “static”, “animated”, “video”
     * */

    public static function uploadStickerFile ($user_id, $sticker, $sticker_format, ) {
        return Laragram::request('uploadStickerFile', func_get_args());
    }

     /**
     * @var integer user_id *(required: true)* User identifier of created sticker set owner
     * @var string name *(required: true)**(min length: 1)**(max length: 1)* Short name of sticker set, to be used in `t.me/addstickers/` URLs (e.g., *animals*). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in `"_by_<bot_username>"`. `<bot_username>` is case insensitive. 1-64 characters.
     * @var string title *(required: true)**(min length: 1)**(max length: 1)* Sticker set title, 1-64 characters
     * @var array stickers *(required: true)* A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
     * @var string sticker_format *(required: true)* Format of stickers in the set, must be one of “static”, “animated”, “video”
     * @var string sticker_type  Type of stickers in the set, pass “regular”, “mask”, or “custom\_emoji”. By default, a regular sticker set is created.
     * @var bool needs_repainting  Pass *True* if stickers in the sticker set must be repainted to the color of text when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context; for custom emoji sticker sets only
     * */

    public static function createNewStickerSet ($user_id, $name, $title, $stickers, $sticker_format, $sticker_type, $needs_repainting, ) {
        return Laragram::request('createNewStickerSet', func_get_args());
    }

     /**
     * @var integer user_id *(required: true)* User identifier of sticker set owner
     * @var string name *(required: true)* Sticker set name
     * @var \Milly\Laragram\Types\InputSticker sticker *(required: true)* A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set isn't changed.
     * */

    public static function addStickerToSet ($user_id, $name, $sticker, ) {
        return Laragram::request('addStickerToSet', func_get_args());
    }

     /**
     * @var string sticker *(required: true)* File identifier of the sticker
     * @var integer position *(required: true)* New sticker position in the set, zero-based
     * */

    public static function setStickerPositionInSet ($sticker, $position, ) {
        return Laragram::request('setStickerPositionInSet', func_get_args());
    }

     /**
     * @var string sticker *(required: true)* File identifier of the sticker
     * */

    public static function deleteStickerFromSet ($sticker, ) {
        return Laragram::request('deleteStickerFromSet', func_get_args());
    }

     /**
     * @var string sticker *(required: true)* File identifier of the sticker
     * @var array emoji_list *(required: true)* A JSON-serialized list of 1-20 emoji associated with the sticker
     * */

    public static function setStickerEmojiList ($sticker, $emoji_list, ) {
        return Laragram::request('setStickerEmojiList', func_get_args());
    }

     /**
     * @var string sticker *(required: true)* File identifier of the sticker
     * @var array keywords  A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters
     * */

    public static function setStickerKeywords ($sticker, $keywords, ) {
        return Laragram::request('setStickerKeywords', func_get_args());
    }

     /**
     * @var string sticker *(required: true)* File identifier of the sticker
     * @var \Milly\Laragram\Types\MaskPosition mask_position  A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.
     * */

    public static function setStickerMaskPosition ($sticker, $mask_position, ) {
        return Laragram::request('setStickerMaskPosition', func_get_args());
    }

     /**
     * @var string name *(required: true)* Sticker set name
     * @var string title *(required: true)**(min length: 1)**(max length: 1)* Sticker set title, 1-64 characters
     * */

    public static function setStickerSetTitle ($name, $title, ) {
        return Laragram::request('setStickerSetTitle', func_get_args());
    }

     /**
     * @var string name *(required: true)* Sticker set name
     * @var integer user_id *(required: true)* User identifier of the sticker set owner
     * @var \Milly\Laragram\Types\InputFile|string  thumbnail  A **.WEBP** or **.PNG** image with the thumbnail, must be up to 128 kilobytes in size and have a width and height of exactly 100px, or a **.TGS** animation with a thumbnail up to 32 kilobytes in size (see [https://core.telegram.org/stickers#animated-sticker-requirements](https://core.telegram.org/stickers#animated-sticker-requirements) for animated sticker technical requirements), or a **WEBM** video with the thumbnail up to 32 kilobytes in size; see [https://core.telegram.org/stickers#video-sticker-requirements](https://core.telegram.org/stickers#video-sticker-requirements) for video sticker technical requirements. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files). Animated and video sticker set thumbnails can't be uploaded via HTTP URL. If omitted, then the thumbnail is dropped and the first sticker is used as the thumbnail.
     * */

    public static function setStickerSetThumbnail ($name, $user_id, \Milly\Laragram\Types\InputFile|string $thumbnail, ) {
        return Laragram::request('setStickerSetThumbnail', func_get_args());
    }

     /**
     * @var string name *(required: true)* Sticker set name
     * @var string custom_emoji_id  Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail.
     * */

    public static function setCustomEmojiStickerSetThumbnail ($name, $custom_emoji_id, ) {
        return Laragram::request('setCustomEmojiStickerSetThumbnail', func_get_args());
    }

     /**
     * @var string name *(required: true)* Sticker set name
     * */

    public static function deleteStickerSet ($name, ) {
        return Laragram::request('deleteStickerSet', func_get_args());
    }

     /**
     * @var string inline_query_id *(required: true)* Unique identifier for the answered query
     * @var array results *(required: true)* A JSON-serialized array of results for the inline query
     * @var integer cache_time *(default: 300)* The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
     * @var bool is_personal  Pass *True* if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query
     * @var string next_offset  Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
     * @var string switch_pm_text  If passed, clients will display a button with specified text that switches the user to a private chat with the bot and sends the bot a start message with the parameter *switch\_pm\_parameter*
     * @var string switch_pm_parameter *(min length: 1)**(max length: 1)* [Deep-linking](https://core.telegram.org/bots/features#deep-linking) parameter for the /start message sent to the bot when user presses the switch button. 1-64 characters, only `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed.  

*Example:* An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an OAuth link. Once done, the bot can offer a [*switch\_inline*](https://core.telegram.org/bots/api/#inlinekeyboardmarkup) button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities.
     * */

    public static function answerInlineQuery ($inline_query_id, $results, $cache_time, $is_personal, $next_offset, $switch_pm_text, $switch_pm_parameter, ) {
        return Laragram::request('answerInlineQuery', func_get_args());
    }

     /**
     * @var string web_app_query_id *(required: true)* Unique identifier for the query to be answered
     * @var \Milly\Laragram\Types\InlineQueryResult result *(required: true)* A JSON-serialized object describing the message to be sent
     * */

    public static function answerWebAppQuery ($web_app_query_id, $result, ) {
        return Laragram::request('answerWebAppQuery', func_get_args());
    }

     /**
     * @var int|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string title *(required: true)**(min length: 1)**(max length: 1)* Product name, 1-32 characters
     * @var string description *(required: true)**(min length: 1)**(max length: 1)* Product description, 1-255 characters
     * @var string payload *(required: true)* Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     * @var string provider_token *(required: true)* Payment provider token, obtained via [@BotFather](https://t.me/botfather)
     * @var string currency *(required: true)* Three-letter ISO 4217 currency code, see [more on currencies](https://core.telegram.org/bots/payments#supported-currencies)
     * @var array prices *(required: true)* Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     * @var integer max_tip_amount *(default: 0)* The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
     * @var array suggested_tip_amounts  A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
     * @var string start_parameter  Unique deep-linking parameter. If left empty, **forwarded copies** of the sent message will have a *Pay* button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a *URL* button with a deep link to the bot (instead of a *Pay* button), with the value used as the start parameter
     * @var string provider_data  JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     * @var string photo_url  URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
     * @var integer photo_size  Photo size in bytes
     * @var integer photo_width  Photo width
     * @var integer photo_height  Photo height
     * @var bool need_name  Pass *True* if you require the user's full name to complete the order
     * @var bool need_phone_number  Pass *True* if you require the user's phone number to complete the order
     * @var bool need_email  Pass *True* if you require the user's email address to complete the order
     * @var bool need_shipping_address  Pass *True* if you require the user's shipping address to complete the order
     * @var bool send_phone_number_to_provider  Pass *True* if the user's phone number should be sent to provider
     * @var bool send_email_to_provider  Pass *True* if the user's email address should be sent to provider
     * @var bool is_flexible  Pass *True* if the final price depends on the shipping method
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards). If empty, one 'Pay `total price`' button will be shown. If not empty, the first button must be a Pay button.
     * */

    public static function sendInvoice (int|string $chat_id, $message_thread_id, $title, $description, $payload, $provider_token, $currency, $prices, $max_tip_amount, $suggested_tip_amounts, $start_parameter, $provider_data, $photo_url, $photo_size, $photo_width, $photo_height, $need_name, $need_phone_number, $need_email, $need_shipping_address, $send_phone_number_to_provider, $send_email_to_provider, $is_flexible, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, $reply_markup, ) {
        return Laragram::request('sendInvoice', func_get_args());
    }

     /**
     * @var string title *(required: true)**(min length: 1)**(max length: 1)* Product name, 1-32 characters
     * @var string description *(required: true)**(min length: 1)**(max length: 1)* Product description, 1-255 characters
     * @var string payload *(required: true)* Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     * @var string provider_token *(required: true)* Payment provider token, obtained via [BotFather](https://t.me/botfather)
     * @var string currency *(required: true)* Three-letter ISO 4217 currency code, see [more on currencies](https://core.telegram.org/bots/payments#supported-currencies)
     * @var array prices *(required: true)* Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     * @var integer max_tip_amount *(default: 0)* The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
     * @var array suggested_tip_amounts  A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
     * @var string provider_data  JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     * @var string photo_url  URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * @var integer photo_size  Photo size in bytes
     * @var integer photo_width  Photo width
     * @var integer photo_height  Photo height
     * @var bool need_name  Pass *True* if you require the user's full name to complete the order
     * @var bool need_phone_number  Pass *True* if you require the user's phone number to complete the order
     * @var bool need_email  Pass *True* if you require the user's email address to complete the order
     * @var bool need_shipping_address  Pass *True* if you require the user's shipping address to complete the order
     * @var bool send_phone_number_to_provider  Pass *True* if the user's phone number should be sent to the provider
     * @var bool send_email_to_provider  Pass *True* if the user's email address should be sent to the provider
     * @var bool is_flexible  Pass *True* if the final price depends on the shipping method
     * */

    public static function createInvoiceLink ($title, $description, $payload, $provider_token, $currency, $prices, $max_tip_amount, $suggested_tip_amounts, $provider_data, $photo_url, $photo_size, $photo_width, $photo_height, $need_name, $need_phone_number, $need_email, $need_shipping_address, $send_phone_number_to_provider, $send_email_to_provider, $is_flexible, ) {
        return Laragram::request('createInvoiceLink', func_get_args());
    }

     /**
     * @var string shipping_query_id *(required: true)* Unique identifier for the query to be answered
     * @var bool ok *(required: true)* Pass *True* if delivery to the specified address is possible and *False* if there are any problems (for example, if delivery to the specified address is not possible)
     * @var array shipping_options  Required if *ok* is *True*. A JSON-serialized array of available shipping options.
     * @var string error_message  Required if *ok* is *False*. Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
     * */

    public static function answerShippingQuery ($shipping_query_id, $ok, $shipping_options, $error_message, ) {
        return Laragram::request('answerShippingQuery', func_get_args());
    }

     /**
     * @var string pre_checkout_query_id *(required: true)* Unique identifier for the query to be answered
     * @var bool ok *(required: true)* Specify *True* if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use *False* if there are any problems.
     * @var string error_message  Required if *ok* is *False*. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.
     * */

    public static function answerPreCheckoutQuery ($pre_checkout_query_id, $ok, $error_message, ) {
        return Laragram::request('answerPreCheckoutQuery', func_get_args());
    }

     /**
     * @var integer user_id *(required: true)* User identifier
     * @var array errors *(required: true)* A JSON-serialized array describing the errors
     * */

    public static function setPassportDataErrors ($user_id, $errors, ) {
        return Laragram::request('setPassportDataErrors', func_get_args());
    }

     /**
     * @var integer chat_id *(required: true)* Unique identifier for the target chat
     * @var integer message_thread_id  Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
     * @var string game_short_name *(required: true)* Short name of the game, serves as the unique identifier for the game. Set up your games via [@BotFather](https://t.me/botfather).
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True* if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards). If empty, one 'Play game\_title' button will be shown. If not empty, the first button must launch the game.
     * */

    public static function sendGame ($chat_id, $message_thread_id, $game_short_name, $disable_notification, $protect_content, $reply_to_message_id, $allow_sending_without_reply, $reply_markup, ) {
        return Laragram::request('sendGame', func_get_args());
    }

     /**
     * @var integer user_id *(required: true)* User identifier
     * @var integer score *(required: true)* New score, must be non-negative
     * @var bool force  Pass *True* if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
     * @var bool disable_edit_message  Pass *True* if the game message should not be automatically edited to include the current scoreboard
     * @var integer chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the sent message
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * */

    public static function setGameScore ($user_id, $score, $force, $disable_edit_message, $chat_id, $message_id, $inline_message_id, ) {
        return Laragram::request('setGameScore', func_get_args());
    }

     /**
     * @var integer user_id *(required: true)* Target user id
     * @var integer chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the sent message
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * */

    public static function getGameHighScores ($user_id, $chat_id, $message_id, $inline_message_id, ) {
        return Laragram::request('getGameHighScores', func_get_args());
    }


}