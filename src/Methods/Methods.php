<?php

namespace Milly\Laragram\Methods;

/**
 * Telegram methods
 *
 * All methods in the Bot API are case-insensitive. We support GET and POST HTTP methods. Use either URL query string or application/json or application/x-www-form-urlencoded or multipart/form-data for passing parameters in Bot API requests.
On successful call, a JSON-object containing the result will be returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api#available-methods
 */
abstract class Methods
{
    abstract static function request (string $method, array $array): array;

     /**
     * @var int|null $offset  <p>Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as <a href="https://core.telegram.org/bots/api/#getupdates">getUpdates</a> is called with an *offset* higher than its *update\_id*. The negative offset can be specified to retrieve updates starting from *-offset* update from the end of the updates queue. All previous updates will be forgotten.</p>
     * @var int|null $limit *(default: 100)* <p>Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.</p>
     * @var int|null $timeout *(default: 0)* <p>Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.</p>
     * @var array|null $allowed_updates  <p>A JSON-serialized list of the update types you want your bot to receive. For example, specify `<a href="https://core.telegram.org/bots/api/#update">"message", "edited<em>channel</em>post", "callback<em>query"]` to only receive updates of these types. See [Update</a> for a complete list of available update types. Specify an empty list to receive all update types except *chat\</em>member*, *message\<em>reaction*, and *message\</em>reaction\_count* (default). If not specified, the previous setting will be used.  </p><p>Please note that this parameter doesn't affect updates created before the call to getUpdates, so unwanted updates may be received for a short period of time.</p>
     * */

    public static function getUpdates (int $offset = null, int $limit = null, int $timeout = null, array $allowed_updates = null, ) {
        return static::request('getUpdates', func_get_args_associative());
    }

     /**
     * @var string $url  <p>HTTPS URL to send updates to. Use an empty string to remove webhook integration</p>
     * @var \Milly\Laragram\Types\InputFile|null $certificate  <p>Upload your public key certificate so that the root certificate in use can be checked. See our <a href="https://core.telegram.org/bots/self-signed">self-signed guide</a> for details.</p>
     * @var string|null $ip_address  <p>The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS</p>
     * @var int|null $max_connections *(default: 40)* <p>The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to *40*. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.</p>
     * @var array|null $allowed_updates  <p>A JSON-serialized list of the update types you want your bot to receive. For example, specify `<a href="https://core.telegram.org/bots/api/#update">"message", "edited<em>channel</em>post", "callback<em>query"]` to only receive updates of these types. See [Update</a> for a complete list of available update types. Specify an empty list to receive all update types except *chat\</em>member*, *message\<em>reaction*, and *message\</em>reaction\_count* (default). If not specified, the previous setting will be used.  
Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.</p>
     * @var bool|null $drop_pending_updates  <p>Pass *True* to drop all pending updates</p>
     * @var string|null $secret_token *(min length: 1)**(max length: 256)* <p>A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed. The header is useful to ensure that the request comes from a webhook set by you.</p>
     * */

    public static function setWebhook (string $url, \Milly\Laragram\Types\InputFile $certificate = null, string $ip_address = null, int $max_connections = null, array $allowed_updates = null, bool $drop_pending_updates = null, string $secret_token = null, ) {
        return static::request('setWebhook', func_get_args_associative());
    }

     /**
     * @var bool|null $drop_pending_updates  <p>Pass *True* to drop all pending updates</p>
     * */

    public static function deleteWebhook (bool $drop_pending_updates = null, ) {
        return static::request('deleteWebhook', func_get_args_associative());
    }


    public static function getWebhookInfo () {
        return static::request('getWebhookInfo', func_get_args_associative());
    }


    public static function getMe () {
        return static::request('getMe', func_get_args_associative());
    }


    public static function logOut () {
        return static::request('logOut', func_get_args_associative());
    }


    public static function close () {
        return static::request('close', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var string $text *(min length: 1)**(max length: 4096)* <p>Text of the message to be sent, 1-4096 characters after entities parsing</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the message text. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $entities  <p>A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse\_mode*</p>
     * @var \Milly\Laragram\Types\LinkPreviewOptions|null $link_preview_options  <p>Link preview generation options for the message</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendMessage (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, string $text, string $parse_mode = null, array $entities = null, \Milly\Laragram\Types\LinkPreviewOptions $link_preview_options = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendMessage', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var int|string  $from_chat_id  <p>Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the forwarded message from forwarding and saving</p>
     * @var int $message_id  <p>Message identifier in the chat specified in *from\<em>chat\</em>id*</p>
     * */

    public static function forwardMessage (int|string  $chat_id, int $message_thread_id = null, int|string  $from_chat_id, bool $disable_notification = null, bool $protect_content = null, int $message_id, ) {
        return static::request('forwardMessage', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var int|string  $from_chat_id  <p>Unique identifier for the chat where the original messages were sent (or channel username in the format `@channelusername`)</p>
     * @var array $message_ids  <p>A JSON-serialized list of 1-100 identifiers of messages in the chat *from\<em>chat\</em>id* to forward. The identifiers must be specified in a strictly increasing order.</p>
     * @var bool|null $disable_notification  <p>Sends the messages <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the forwarded messages from forwarding and saving</p>
     * */

    public static function forwardMessages (int|string  $chat_id, int $message_thread_id = null, int|string  $from_chat_id, array $message_ids, bool $disable_notification = null, bool $protect_content = null, ) {
        return static::request('forwardMessages', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var int|string  $from_chat_id  <p>Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)</p>
     * @var int $message_id  <p>Message identifier in the chat specified in *from\<em>chat\</em>id*</p>
     * @var string|null $caption *(min length: 0)**(max length: 1024)* <p>New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the new caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $caption_entities  <p>A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of *parse\_mode*</p>
     * @var bool|null $show_caption_above_media  <p>Pass *True*, if the caption must be shown above the message media. Ignored if a new caption isn't specified.</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function copyMessage (int|string  $chat_id, int $message_thread_id = null, int|string  $from_chat_id, int $message_id, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $show_caption_above_media = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('copyMessage', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var int|string  $from_chat_id  <p>Unique identifier for the chat where the original messages were sent (or channel username in the format `@channelusername`)</p>
     * @var array $message_ids  <p>A JSON-serialized list of 1-100 identifiers of messages in the chat *from\<em>chat\</em>id* to copy. The identifiers must be specified in a strictly increasing order.</p>
     * @var bool|null $disable_notification  <p>Sends the messages <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent messages from forwarding and saving</p>
     * @var bool|null $remove_caption  <p>Pass *True* to copy the messages without their captions</p>
     * */

    public static function copyMessages (int|string  $chat_id, int $message_thread_id = null, int|string  $from_chat_id, array $message_ids, bool $disable_notification = null, bool $protect_content = null, bool $remove_caption = null, ) {
        return static::request('copyMessages', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var \Milly\Laragram\Types\InputFile|string  $photo  <p>Photo to send. Pass a file\_id as String to send a photo that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a photo from the Internet, or upload a new photo using multipart/form-data. The photo must be at most 10 MB in size. The photo's width and height must not exceed 10000 in total. Width and height ratio must be at most 20. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var string|null $caption *(min length: 0)**(max length: 1024)* <p>Photo caption (may also be used when resending photos by *file\_id*), 0-1024 characters after entities parsing</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the photo caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $caption_entities  <p>A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
     * @var bool|null $show_caption_above_media  <p>Pass *True*, if the caption must be shown above the message media</p>
     * @var bool|null $has_spoiler  <p>Pass *True* if the photo needs to be covered with a spoiler animation</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendPhoto (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, \Milly\Laragram\Types\InputFile|string  $photo, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $show_caption_above_media = null, bool $has_spoiler = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendPhoto', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var \Milly\Laragram\Types\InputFile|string  $audio  <p>Audio file to send. Pass a file\_id as String to send an audio file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an audio file from the Internet, or upload a new one using multipart/form-data. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var string|null $caption *(min length: 0)**(max length: 1024)* <p>Audio caption, 0-1024 characters after entities parsing</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the audio caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $caption_entities  <p>A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
     * @var int|null $duration  <p>Duration of the audio in seconds</p>
     * @var string|null $performer  <p>Performer</p>
     * @var string|null $title  <p>Track name</p>
     * @var \Milly\Laragram\Types\InputFile|string |null $thumbnail  <p>Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\<em>attach\</em>name\>” if the thumbnail was uploaded using multipart/form-data under \<file\<em>attach\</em>name\>. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendAudio (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, \Milly\Laragram\Types\InputFile|string  $audio, string $caption = null, string $parse_mode = null, array $caption_entities = null, int $duration = null, string $performer = null, string $title = null, \Milly\Laragram\Types\InputFile|string  $thumbnail = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendAudio', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var \Milly\Laragram\Types\InputFile|string  $document  <p>File to send. Pass a file\_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var \Milly\Laragram\Types\InputFile|string |null $thumbnail  <p>Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\<em>attach\</em>name\>” if the thumbnail was uploaded using multipart/form-data under \<file\<em>attach\</em>name\>. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var string|null $caption *(min length: 0)**(max length: 1024)* <p>Document caption (may also be used when resending documents by *file\_id*), 0-1024 characters after entities parsing</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the document caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $caption_entities  <p>A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
     * @var bool|null $disable_content_type_detection  <p>Disables automatic server-side content type detection for files uploaded using multipart/form-data</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendDocument (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, \Milly\Laragram\Types\InputFile|string  $document, \Milly\Laragram\Types\InputFile|string  $thumbnail = null, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $disable_content_type_detection = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendDocument', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var \Milly\Laragram\Types\InputFile|string  $video  <p>Video to send. Pass a file\_id as String to send a video that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a video from the Internet, or upload a new video using multipart/form-data. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var int|null $duration  <p>Duration of sent video in seconds</p>
     * @var int|null $width  <p>Video width</p>
     * @var int|null $height  <p>Video height</p>
     * @var \Milly\Laragram\Types\InputFile|string |null $thumbnail  <p>Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\<em>attach\</em>name\>” if the thumbnail was uploaded using multipart/form-data under \<file\<em>attach\</em>name\>. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var string|null $caption *(min length: 0)**(max length: 1024)* <p>Video caption (may also be used when resending videos by *file\_id*), 0-1024 characters after entities parsing</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the video caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $caption_entities  <p>A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
     * @var bool|null $show_caption_above_media  <p>Pass *True*, if the caption must be shown above the message media</p>
     * @var bool|null $has_spoiler  <p>Pass *True* if the video needs to be covered with a spoiler animation</p>
     * @var bool|null $supports_streaming  <p>Pass *True* if the uploaded video is suitable for streaming</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendVideo (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, \Milly\Laragram\Types\InputFile|string  $video, int $duration = null, int $width = null, int $height = null, \Milly\Laragram\Types\InputFile|string  $thumbnail = null, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $show_caption_above_media = null, bool $has_spoiler = null, bool $supports_streaming = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendVideo', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var \Milly\Laragram\Types\InputFile|string  $animation  <p>Animation to send. Pass a file\_id as String to send an animation that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an animation from the Internet, or upload a new animation using multipart/form-data. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var int|null $duration  <p>Duration of sent animation in seconds</p>
     * @var int|null $width  <p>Animation width</p>
     * @var int|null $height  <p>Animation height</p>
     * @var \Milly\Laragram\Types\InputFile|string |null $thumbnail  <p>Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\<em>attach\</em>name\>” if the thumbnail was uploaded using multipart/form-data under \<file\<em>attach\</em>name\>. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var string|null $caption *(min length: 0)**(max length: 1024)* <p>Animation caption (may also be used when resending animation by *file\_id*), 0-1024 characters after entities parsing</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the animation caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $caption_entities  <p>A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
     * @var bool|null $show_caption_above_media  <p>Pass *True*, if the caption must be shown above the message media</p>
     * @var bool|null $has_spoiler  <p>Pass *True* if the animation needs to be covered with a spoiler animation</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendAnimation (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, \Milly\Laragram\Types\InputFile|string  $animation, int $duration = null, int $width = null, int $height = null, \Milly\Laragram\Types\InputFile|string  $thumbnail = null, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $show_caption_above_media = null, bool $has_spoiler = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendAnimation', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var \Milly\Laragram\Types\InputFile|string  $voice  <p>Audio file to send. Pass a file\_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var string|null $caption *(min length: 0)**(max length: 1024)* <p>Voice message caption, 0-1024 characters after entities parsing</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the voice message caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $caption_entities  <p>A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
     * @var int|null $duration  <p>Duration of the voice message in seconds</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendVoice (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, \Milly\Laragram\Types\InputFile|string  $voice, string $caption = null, string $parse_mode = null, array $caption_entities = null, int $duration = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendVoice', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var \Milly\Laragram\Types\InputFile|string  $video_note  <p>Video note to send. Pass a file\_id as String to send a video note that exists on the Telegram servers (recommended) or upload a new video using multipart/form-data. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a>. Sending video notes by a URL is currently unsupported</p>
     * @var int|null $duration  <p>Duration of sent video in seconds</p>
     * @var int|null $length  <p>Video width and height, i.e. diameter of the video message</p>
     * @var \Milly\Laragram\Types\InputFile|string |null $thumbnail  <p>Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\<em>attach\</em>name\>” if the thumbnail was uploaded using multipart/form-data under \<file\<em>attach\</em>name\>. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendVideoNote (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, \Milly\Laragram\Types\InputFile|string  $video_note, int $duration = null, int $length = null, \Milly\Laragram\Types\InputFile|string  $thumbnail = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendVideoNote', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`). If the chat is a channel, all Telegram Star proceeds from this media will be credited to the chat's balance. Otherwise, they will be credited to the bot's balance.</p>
     * @var int $star_count  <p>The number of Telegram Stars that must be paid to buy access to the media; 1-2500</p>
     * @var array $media  <p>A JSON-serialized array describing the media to be sent; up to 10 items</p>
     * @var string|null $payload  <p>Bot-defined paid media payload, 0-128 bytes. This will not be displayed to the user, use it for your internal processes.</p>
     * @var string|null $caption *(min length: 0)**(max length: 1024)* <p>Media caption, 0-1024 characters after entities parsing</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the media caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $caption_entities  <p>A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
     * @var bool|null $show_caption_above_media  <p>Pass *True*, if the caption must be shown above the message media</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendPaidMedia (string $business_connection_id = null, int|string  $chat_id, int $star_count, array $media, string $payload = null, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $show_caption_above_media = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendPaidMedia', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var array $media  <p>A JSON-serialized array describing messages to be sent, must include 2-10 items</p>
     * @var bool|null $disable_notification  <p>Sends messages <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent messages from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * */

    public static function sendMediaGroup (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, array $media, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, ) {
        return static::request('sendMediaGroup', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var float $latitude  <p>Latitude of the location</p>
     * @var float $longitude  <p>Longitude of the location</p>
     * @var float|null $horizontal_accuracy  <p>The radius of uncertainty for the location, measured in meters; 0-1500</p>
     * @var int|null $live_period  <p>Period in seconds during which the location will be updated (see <a href="https://telegram.org/blog/live-locations">Live Locations</a>, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.</p>
     * @var int|null $heading  <p>For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.</p>
     * @var int|null $proximity_alert_radius  <p>For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendLocation (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, float $latitude, float $longitude, float $horizontal_accuracy = null, int $live_period = null, int $heading = null, int $proximity_alert_radius = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendLocation', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var float $latitude  <p>Latitude of the venue</p>
     * @var float $longitude  <p>Longitude of the venue</p>
     * @var string $title  <p>Name of the venue</p>
     * @var string $address  <p>Address of the venue</p>
     * @var string|null $foursquare_id  <p>Foursquare identifier of the venue</p>
     * @var string|null $foursquare_type  <p>Foursquare type of the venue, if known. (For example, “arts\<em>entertainment/default”, “arts\</em>entertainment/aquarium” or “food/icecream”.)</p>
     * @var string|null $google_place_id  <p>Google Places identifier of the venue</p>
     * @var string|null $google_place_type  <p>Google Places type of the venue. (See <a href="https://developers.google.com/places/web-service/supported_types">supported types</a>.)</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendVenue (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, float $latitude, float $longitude, string $title, string $address, string $foursquare_id = null, string $foursquare_type = null, string $google_place_id = null, string $google_place_type = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendVenue', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var string $phone_number  <p>Contact's phone number</p>
     * @var string $first_name  <p>Contact's first name</p>
     * @var string|null $last_name  <p>Contact's last name</p>
     * @var string|null $vcard  <p>Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a>, 0-2048 bytes</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendContact (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, string $phone_number, string $first_name, string $last_name = null, string $vcard = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendContact', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var string $question *(min length: 1)**(max length: 300)* <p>Poll question, 1-300 characters</p>
     * @var string|null $question_parse_mode  <p>Mode for parsing entities in the question. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details. Currently, only custom emoji entities are allowed</p>
     * @var array|null $question_entities  <p>A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of *question\<em>parse\</em>mode*</p>
     * @var array $options  <p>A JSON-serialized list of 2-10 answer options</p>
     * @var bool|null $is_anonymous  <p>*True*, if the poll needs to be anonymous, defaults to *True*</p>
     * @var string|null $type  <p>Poll type, “quiz” or “regular”, defaults to “regular”</p>
     * @var bool|null $allows_multiple_answers  <p>*True*, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to *False*</p>
     * @var int|null $correct_option_id  <p>0-based identifier of the correct answer option, required for polls in quiz mode</p>
     * @var string|null $explanation *(min length: 0)**(max length: 200)* <p>Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing</p>
     * @var string|null $explanation_parse_mode  <p>Mode for parsing entities in the explanation. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $explanation_entities  <p>A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of *explanation\<em>parse\</em>mode*</p>
     * @var int|null $open_period  <p>Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with *close\_date*.</p>
     * @var int|null $close_date  <p>Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with *open\_period*.</p>
     * @var bool|null $is_closed  <p>Pass *True* if the poll needs to be immediately closed. This can be useful for poll preview.</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendPoll (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, string $question, string $question_parse_mode = null, array $question_entities = null, array $options, bool $is_anonymous = null, string $type = null, bool $allows_multiple_answers = null, int $correct_option_id = null, string $explanation = null, string $explanation_parse_mode = null, array $explanation_entities = null, int $open_period = null, int $close_date = null, bool $is_closed = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendPoll', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var string|null $emoji *(default: 🎲)* <p>Emoji on which the dice throw animation is based. Currently, must be one of “🎲”, “🎯”, “🏀”, “⚽”, “🎳”, or “🎰”. Dice can have values 1-6 for “🎲”, “🎯” and “🎳”, values 1-5 for “🏀” and “⚽”, and values 1-64 for “🎰”. Defaults to “🎲”</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendDice (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, string $emoji = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendDice', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the action will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread; for supergroups only</p>
     * @var string $action  <p>Type of action to broadcast. Choose one, depending on what the user is about to receive: *typing* for <a href="https://core.telegram.org/bots/api/#sendmessage">text messages</a>, *upload\<em>photo* for <a href="https://core.telegram.org/bots/api/#sendphoto">photos</a>, *record\</em>video* or *upload\<em>video* for <a href="https://core.telegram.org/bots/api/#sendvideo">videos</a>, *record\</em>voice* or *upload\<em>voice* for <a href="https://core.telegram.org/bots/api/#sendvoice">voice notes</a>, *upload\</em>document* for <a href="https://core.telegram.org/bots/api/#senddocument">general files</a>, *choose\<em>sticker* for <a href="https://core.telegram.org/bots/api/#sendsticker">stickers</a>, *find\</em>location* for <a href="https://core.telegram.org/bots/api/#sendlocation">location data</a>, *record\<em>video\</em>note* or *upload\<em>video\</em>note* for <a href="https://core.telegram.org/bots/api/#sendvideonote">video notes</a>.</p>
     * */

    public static function sendChatAction (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, string $action, ) {
        return static::request('sendChatAction', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int $message_id  <p>Identifier of the target message. If the message belongs to a media group, the reaction is set to the first non-deleted message in the group instead.</p>
     * @var array|null $reaction  <p>A JSON-serialized list of reaction types to set on the message. Currently, as non-premium users, bots can set up to one reaction per message. A custom emoji reaction can be used if it is either already present on the message or explicitly allowed by chat administrators. Paid reactions can't be used by bots.</p>
     * @var bool|null $is_big  <p>Pass *True* to set the reaction with a big animation</p>
     * */

    public static function setMessageReaction (int|string  $chat_id, int $message_id, array $reaction = null, bool $is_big = null, ) {
        return static::request('setMessageReaction', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * @var int|null $offset  <p>Sequential number of the first photo to be returned. By default, all photos are returned.</p>
     * @var int|null $limit *(default: 100)* <p>Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.</p>
     * */

    public static function getUserProfilePhotos (int $user_id, int $offset = null, int $limit = null, ) {
        return static::request('getUserProfilePhotos', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * @var string|null $emoji_status_custom_emoji_id  <p>Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.</p>
     * @var int|null $emoji_status_expiration_date  <p>Expiration date of the emoji status, if any</p>
     * */

    public static function setUserEmojiStatus (int $user_id, string $emoji_status_custom_emoji_id = null, int $emoji_status_expiration_date = null, ) {
        return static::request('setUserEmojiStatus', func_get_args_associative());
    }

     /**
     * @var string $file_id  <p>File identifier to get information about</p>
     * */

    public static function getFile (string $file_id, ) {
        return static::request('getFile', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)</p>
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * @var int|null $until_date  <p>Date when the user will be unbanned; Unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.</p>
     * @var bool|null $revoke_messages  <p>Pass *True* to delete all messages from the chat for the user that is being removed. If *False*, the user will be able to see messages in the group that were sent before the user was removed. Always *True* for supergroups and channels.</p>
     * */

    public static function banChatMember (int|string  $chat_id, int $user_id, int $until_date = null, bool $revoke_messages = null, ) {
        return static::request('banChatMember', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)</p>
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * @var bool|null $only_if_banned  <p>Do nothing if the user is not banned</p>
     * */

    public static function unbanChatMember (int|string  $chat_id, int $user_id, bool $only_if_banned = null, ) {
        return static::request('unbanChatMember', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * @var \Milly\Laragram\Types\ChatPermissions $permissions  <p>A JSON-serialized object for new user permissions</p>
     * @var bool|null $use_independent_chat_permissions  <p>Pass *True* if chat permissions are set independently. Otherwise, the *can\<em>send\</em>other\<em>messages* and *can\</em>add\<em>web\</em>page\<em>previews* permissions will imply the *can\</em>send\<em>messages*, *can\</em>send\<em>audios*, *can\</em>send\<em>documents*, *can\</em>send\<em>photos*, *can\</em>send\<em>videos*, *can\</em>send\<em>video\</em>notes*, and *can\<em>send\</em>voice\<em>notes* permissions; the *can\</em>send\<em>polls* permission will imply the *can\</em>send\_messages* permission.</p>
     * @var int|null $until_date  <p>Date when restrictions will be lifted for the user; Unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever</p>
     * */

    public static function restrictChatMember (int|string  $chat_id, int $user_id, \Milly\Laragram\Types\ChatPermissions $permissions, bool $use_independent_chat_permissions = null, int $until_date = null, ) {
        return static::request('restrictChatMember', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * @var bool|null $is_anonymous  <p>Pass *True* if the administrator's presence in the chat is hidden</p>
     * @var bool|null $can_manage_chat  <p>Pass *True* if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.</p>
     * @var bool|null $can_delete_messages  <p>Pass *True* if the administrator can delete messages of other users</p>
     * @var bool|null $can_manage_video_chats  <p>Pass *True* if the administrator can manage video chats</p>
     * @var bool|null $can_restrict_members  <p>Pass *True* if the administrator can restrict, ban or unban chat members, or access supergroup statistics</p>
     * @var bool|null $can_promote_members  <p>Pass *True* if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by him)</p>
     * @var bool|null $can_change_info  <p>Pass *True* if the administrator can change chat title, photo and other settings</p>
     * @var bool|null $can_invite_users  <p>Pass *True* if the administrator can invite new users to the chat</p>
     * @var bool|null $can_post_stories  <p>Pass *True* if the administrator can post stories to the chat</p>
     * @var bool|null $can_edit_stories  <p>Pass *True* if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive</p>
     * @var bool|null $can_delete_stories  <p>Pass *True* if the administrator can delete stories posted by other users</p>
     * @var bool|null $can_post_messages  <p>Pass *True* if the administrator can post messages in the channel, or access channel statistics; for channels only</p>
     * @var bool|null $can_edit_messages  <p>Pass *True* if the administrator can edit messages of other users and can pin messages; for channels only</p>
     * @var bool|null $can_pin_messages  <p>Pass *True* if the administrator can pin messages; for supergroups only</p>
     * @var bool|null $can_manage_topics  <p>Pass *True* if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only</p>
     * */

    public static function promoteChatMember (int|string  $chat_id, int $user_id, bool $is_anonymous = null, bool $can_manage_chat = null, bool $can_delete_messages = null, bool $can_manage_video_chats = null, bool $can_restrict_members = null, bool $can_promote_members = null, bool $can_change_info = null, bool $can_invite_users = null, bool $can_post_stories = null, bool $can_edit_stories = null, bool $can_delete_stories = null, bool $can_post_messages = null, bool $can_edit_messages = null, bool $can_pin_messages = null, bool $can_manage_topics = null, ) {
        return static::request('promoteChatMember', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * @var string $custom_title *(min length: 0)**(max length: 16)* <p>New custom title for the administrator; 0-16 characters, emoji are not allowed</p>
     * */

    public static function setChatAdministratorCustomTitle (int|string  $chat_id, int $user_id, string $custom_title, ) {
        return static::request('setChatAdministratorCustomTitle', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int $sender_chat_id  <p>Unique identifier of the target sender chat</p>
     * */

    public static function banChatSenderChat (int|string  $chat_id, int $sender_chat_id, ) {
        return static::request('banChatSenderChat', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int $sender_chat_id  <p>Unique identifier of the target sender chat</p>
     * */

    public static function unbanChatSenderChat (int|string  $chat_id, int $sender_chat_id, ) {
        return static::request('unbanChatSenderChat', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var \Milly\Laragram\Types\ChatPermissions $permissions  <p>A JSON-serialized object for new default chat permissions</p>
     * @var bool|null $use_independent_chat_permissions  <p>Pass *True* if chat permissions are set independently. Otherwise, the *can\<em>send\</em>other\<em>messages* and *can\</em>add\<em>web\</em>page\<em>previews* permissions will imply the *can\</em>send\<em>messages*, *can\</em>send\<em>audios*, *can\</em>send\<em>documents*, *can\</em>send\<em>photos*, *can\</em>send\<em>videos*, *can\</em>send\<em>video\</em>notes*, and *can\<em>send\</em>voice\<em>notes* permissions; the *can\</em>send\<em>polls* permission will imply the *can\</em>send\_messages* permission.</p>
     * */

    public static function setChatPermissions (int|string  $chat_id, \Milly\Laragram\Types\ChatPermissions $permissions, bool $use_independent_chat_permissions = null, ) {
        return static::request('setChatPermissions', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * */

    public static function exportChatInviteLink (int|string  $chat_id, ) {
        return static::request('exportChatInviteLink', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var string|null $name *(min length: 0)**(max length: 32)* <p>Invite link name; 0-32 characters</p>
     * @var int|null $expire_date  <p>Point in time (Unix timestamp) when the link will expire</p>
     * @var int|null $member_limit  <p>The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999</p>
     * @var bool|null $creates_join_request  <p>*True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified</p>
     * */

    public static function createChatInviteLink (int|string  $chat_id, string $name = null, int $expire_date = null, int $member_limit = null, bool $creates_join_request = null, ) {
        return static::request('createChatInviteLink', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var string $invite_link  <p>The invite link to edit</p>
     * @var string|null $name *(min length: 0)**(max length: 32)* <p>Invite link name; 0-32 characters</p>
     * @var int|null $expire_date  <p>Point in time (Unix timestamp) when the link will expire</p>
     * @var int|null $member_limit  <p>The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999</p>
     * @var bool|null $creates_join_request  <p>*True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified</p>
     * */

    public static function editChatInviteLink (int|string  $chat_id, string $invite_link, string $name = null, int $expire_date = null, int $member_limit = null, bool $creates_join_request = null, ) {
        return static::request('editChatInviteLink', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target channel chat or username of the target channel (in the format `@channelusername`)</p>
     * @var string|null $name *(min length: 0)**(max length: 32)* <p>Invite link name; 0-32 characters</p>
     * @var int $subscription_period  <p>The number of seconds the subscription will be active for before the next payment. Currently, it must always be 2592000 (30 days).</p>
     * @var int $subscription_price  <p>The amount of Telegram Stars a user must pay initially and after each subsequent subscription period to be a member of the chat; 1-2500</p>
     * */

    public static function createChatSubscriptionInviteLink (int|string  $chat_id, string $name = null, int $subscription_period, int $subscription_price, ) {
        return static::request('createChatSubscriptionInviteLink', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var string $invite_link  <p>The invite link to edit</p>
     * @var string|null $name *(min length: 0)**(max length: 32)* <p>Invite link name; 0-32 characters</p>
     * */

    public static function editChatSubscriptionInviteLink (int|string  $chat_id, string $invite_link, string $name = null, ) {
        return static::request('editChatSubscriptionInviteLink', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier of the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var string $invite_link  <p>The invite link to revoke</p>
     * */

    public static function revokeChatInviteLink (int|string  $chat_id, string $invite_link, ) {
        return static::request('revokeChatInviteLink', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * */

    public static function approveChatJoinRequest (int|string  $chat_id, int $user_id, ) {
        return static::request('approveChatJoinRequest', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * */

    public static function declineChatJoinRequest (int|string  $chat_id, int $user_id, ) {
        return static::request('declineChatJoinRequest', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var \Milly\Laragram\Types\InputFile $photo  <p>New chat photo, uploaded using multipart/form-data</p>
     * */

    public static function setChatPhoto (int|string  $chat_id, \Milly\Laragram\Types\InputFile $photo, ) {
        return static::request('setChatPhoto', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * */

    public static function deleteChatPhoto (int|string  $chat_id, ) {
        return static::request('deleteChatPhoto', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var string $title *(min length: 1)**(max length: 128)* <p>New chat title, 1-128 characters</p>
     * */

    public static function setChatTitle (int|string  $chat_id, string $title, ) {
        return static::request('setChatTitle', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var string|null $description *(min length: 0)**(max length: 255)* <p>New chat description, 0-255 characters</p>
     * */

    public static function setChatDescription (int|string  $chat_id, string $description = null, ) {
        return static::request('setChatDescription', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be pinned</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int $message_id  <p>Identifier of a message to pin</p>
     * @var bool|null $disable_notification  <p>Pass *True* if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.</p>
     * */

    public static function pinChatMessage (string $business_connection_id = null, int|string  $chat_id, int $message_id, bool $disable_notification = null, ) {
        return static::request('pinChatMessage', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be unpinned</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_id  <p>Identifier of the message to unpin. Required if *business\<em>connection\</em>id* is specified. If not specified, the most recent pinned message (by sending date) will be unpinned.</p>
     * */

    public static function unpinChatMessage (string $business_connection_id = null, int|string  $chat_id, int $message_id = null, ) {
        return static::request('unpinChatMessage', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * */

    public static function unpinAllChatMessages (int|string  $chat_id, ) {
        return static::request('unpinAllChatMessages', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)</p>
     * */

    public static function leaveChat (int|string  $chat_id, ) {
        return static::request('leaveChat', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)</p>
     * */

    public static function getChat (int|string  $chat_id, ) {
        return static::request('getChat', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)</p>
     * */

    public static function getChatAdministrators (int|string  $chat_id, ) {
        return static::request('getChatAdministrators', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)</p>
     * */

    public static function getChatMemberCount (int|string  $chat_id, ) {
        return static::request('getChatMemberCount', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)</p>
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * */

    public static function getChatMember (int|string  $chat_id, int $user_id, ) {
        return static::request('getChatMember', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var string $sticker_set_name  <p>Name of the sticker set to be set as the group sticker set</p>
     * */

    public static function setChatStickerSet (int|string  $chat_id, string $sticker_set_name, ) {
        return static::request('setChatStickerSet', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * */

    public static function deleteChatStickerSet (int|string  $chat_id, ) {
        return static::request('deleteChatStickerSet', func_get_args_associative());
    }


    public static function getForumTopicIconStickers () {
        return static::request('getForumTopicIconStickers', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var string $name *(min length: 1)**(max length: 128)* <p>Topic name, 1-128 characters</p>
     * @var int|null $icon_color  <p>Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)</p>
     * @var string|null $icon_custom_emoji_id  <p>Unique identifier of the custom emoji shown as the topic icon. Use <a href="https://core.telegram.org/bots/api/#getforumtopiciconstickers">getForumTopicIconStickers</a> to get all allowed custom emoji identifiers.</p>
     * */

    public static function createForumTopic (int|string  $chat_id, string $name, int $icon_color = null, string $icon_custom_emoji_id = null, ) {
        return static::request('createForumTopic', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var int $message_thread_id  <p>Unique identifier for the target message thread of the forum topic</p>
     * @var string|null $name *(min length: 0)**(max length: 128)* <p>New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept</p>
     * @var string|null $icon_custom_emoji_id  <p>New unique identifier of the custom emoji shown as the topic icon. Use <a href="https://core.telegram.org/bots/api/#getforumtopiciconstickers">getForumTopicIconStickers</a> to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept</p>
     * */

    public static function editForumTopic (int|string  $chat_id, int $message_thread_id, string $name = null, string $icon_custom_emoji_id = null, ) {
        return static::request('editForumTopic', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var int $message_thread_id  <p>Unique identifier for the target message thread of the forum topic</p>
     * */

    public static function closeForumTopic (int|string  $chat_id, int $message_thread_id, ) {
        return static::request('closeForumTopic', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var int $message_thread_id  <p>Unique identifier for the target message thread of the forum topic</p>
     * */

    public static function reopenForumTopic (int|string  $chat_id, int $message_thread_id, ) {
        return static::request('reopenForumTopic', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var int $message_thread_id  <p>Unique identifier for the target message thread of the forum topic</p>
     * */

    public static function deleteForumTopic (int|string  $chat_id, int $message_thread_id, ) {
        return static::request('deleteForumTopic', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var int $message_thread_id  <p>Unique identifier for the target message thread of the forum topic</p>
     * */

    public static function unpinAllForumTopicMessages (int|string  $chat_id, int $message_thread_id, ) {
        return static::request('unpinAllForumTopicMessages', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * @var string $name *(min length: 1)**(max length: 128)* <p>New topic name, 1-128 characters</p>
     * */

    public static function editGeneralForumTopic (int|string  $chat_id, string $name, ) {
        return static::request('editGeneralForumTopic', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * */

    public static function closeGeneralForumTopic (int|string  $chat_id, ) {
        return static::request('closeGeneralForumTopic', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * */

    public static function reopenGeneralForumTopic (int|string  $chat_id, ) {
        return static::request('reopenGeneralForumTopic', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * */

    public static function hideGeneralForumTopic (int|string  $chat_id, ) {
        return static::request('hideGeneralForumTopic', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * */

    public static function unhideGeneralForumTopic (int|string  $chat_id, ) {
        return static::request('unhideGeneralForumTopic', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
     * */

    public static function unpinAllGeneralForumTopicMessages (int|string  $chat_id, ) {
        return static::request('unpinAllGeneralForumTopicMessages', func_get_args_associative());
    }

     /**
     * @var string $callback_query_id  <p>Unique identifier for the query to be answered</p>
     * @var string|null $text *(min length: 0)**(max length: 200)* <p>Text of the notification. If not specified, nothing will be shown to the user, 0-200 characters</p>
     * @var bool|null $show_alert *(default: )* <p>If *True*, an alert will be shown by the client instead of a notification at the top of the chat screen. Defaults to *false*.</p>
     * @var string|null $url  <p>URL that will be opened by the user's client. If you have created a <a href="https://core.telegram.org/bots/api/#game">Game</a> and accepted the conditions via <a href="https://t.me/botfather">@BotFather</a>, specify the URL that opens your game - note that this will only work if the query comes from a <a href="https://core.telegram.org/bots/api/#inlinekeyboardbutton">*callback\_game*</a> button.  </p><p>Otherwise, you may use links like `t.me/your_bot?start=XXXX` that open your bot with a parameter.</p>
     * @var int|null $cache_time *(default: 0)* <p>The maximum amount of time in seconds that the result of the callback query may be cached client-side. Telegram apps will support caching starting in version 3.14. Defaults to 0.</p>
     * */

    public static function answerCallbackQuery (string $callback_query_id, string $text = null, bool $show_alert = null, string $url = null, int $cache_time = null, ) {
        return static::request('answerCallbackQuery', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the chat or username of the channel (in the format `@channelusername`)</p>
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * */

    public static function getUserChatBoosts (int|string  $chat_id, int $user_id, ) {
        return static::request('getUserChatBoosts', func_get_args_associative());
    }

     /**
     * @var string $business_connection_id  <p>Unique identifier of the business connection</p>
     * */

    public static function getBusinessConnection (string $business_connection_id, ) {
        return static::request('getBusinessConnection', func_get_args_associative());
    }

     /**
     * @var array $commands  <p>A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.</p>
     * @var \Milly\Laragram\Types\BotCommandScope|null $scope  <p>A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to <a href="https://core.telegram.org/bots/api/#botcommandscopedefault">BotCommandScopeDefault</a>.</p>
     * @var string|null $language_code  <p>A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands</p>
     * */

    public static function setMyCommands (array $commands, \Milly\Laragram\Types\BotCommandScope $scope = null, string $language_code = null, ) {
        return static::request('setMyCommands', func_get_args_associative());
    }

     /**
     * @var \Milly\Laragram\Types\BotCommandScope|null $scope  <p>A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to <a href="https://core.telegram.org/bots/api/#botcommandscopedefault">BotCommandScopeDefault</a>.</p>
     * @var string|null $language_code  <p>A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands</p>
     * */

    public static function deleteMyCommands (\Milly\Laragram\Types\BotCommandScope $scope = null, string $language_code = null, ) {
        return static::request('deleteMyCommands', func_get_args_associative());
    }

     /**
     * @var \Milly\Laragram\Types\BotCommandScope|null $scope  <p>A JSON-serialized object, describing scope of users. Defaults to <a href="https://core.telegram.org/bots/api/#botcommandscopedefault">BotCommandScopeDefault</a>.</p>
     * @var string|null $language_code  <p>A two-letter ISO 639-1 language code or an empty string</p>
     * */

    public static function getMyCommands (\Milly\Laragram\Types\BotCommandScope $scope = null, string $language_code = null, ) {
        return static::request('getMyCommands', func_get_args_associative());
    }

     /**
     * @var string|null $name *(min length: 0)**(max length: 64)* <p>New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.</p>
     * @var string|null $language_code  <p>A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.</p>
     * */

    public static function setMyName (string $name = null, string $language_code = null, ) {
        return static::request('setMyName', func_get_args_associative());
    }

     /**
     * @var string|null $language_code  <p>A two-letter ISO 639-1 language code or an empty string</p>
     * */

    public static function getMyName (string $language_code = null, ) {
        return static::request('getMyName', func_get_args_associative());
    }

     /**
     * @var string|null $description *(min length: 0)**(max length: 512)* <p>New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.</p>
     * @var string|null $language_code  <p>A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.</p>
     * */

    public static function setMyDescription (string $description = null, string $language_code = null, ) {
        return static::request('setMyDescription', func_get_args_associative());
    }

     /**
     * @var string|null $language_code  <p>A two-letter ISO 639-1 language code or an empty string</p>
     * */

    public static function getMyDescription (string $language_code = null, ) {
        return static::request('getMyDescription', func_get_args_associative());
    }

     /**
     * @var string|null $short_description *(min length: 0)**(max length: 120)* <p>New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.</p>
     * @var string|null $language_code  <p>A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.</p>
     * */

    public static function setMyShortDescription (string $short_description = null, string $language_code = null, ) {
        return static::request('setMyShortDescription', func_get_args_associative());
    }

     /**
     * @var string|null $language_code  <p>A two-letter ISO 639-1 language code or an empty string</p>
     * */

    public static function getMyShortDescription (string $language_code = null, ) {
        return static::request('getMyShortDescription', func_get_args_associative());
    }

     /**
     * @var int|null $chat_id  <p>Unique identifier for the target private chat. If not specified, default bot's menu button will be changed</p>
     * @var \Milly\Laragram\Types\MenuButton|null $menu_button  <p>A JSON-serialized object for the bot's new menu button. Defaults to <a href="https://core.telegram.org/bots/api/#menubuttondefault">MenuButtonDefault</a></p>
     * */

    public static function setChatMenuButton (int $chat_id = null, \Milly\Laragram\Types\MenuButton $menu_button = null, ) {
        return static::request('setChatMenuButton', func_get_args_associative());
    }

     /**
     * @var int|null $chat_id  <p>Unique identifier for the target private chat. If not specified, default bot's menu button will be returned</p>
     * */

    public static function getChatMenuButton (int $chat_id = null, ) {
        return static::request('getChatMenuButton', func_get_args_associative());
    }

     /**
     * @var \Milly\Laragram\Types\ChatAdministratorRights|null $rights  <p>A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.</p>
     * @var bool|null $for_channels  <p>Pass *True* to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.</p>
     * */

    public static function setMyDefaultAdministratorRights (\Milly\Laragram\Types\ChatAdministratorRights $rights = null, bool $for_channels = null, ) {
        return static::request('setMyDefaultAdministratorRights', func_get_args_associative());
    }

     /**
     * @var bool|null $for_channels  <p>Pass *True* to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.</p>
     * */

    public static function getMyDefaultAdministratorRights (bool $for_channels = null, ) {
        return static::request('getMyDefaultAdministratorRights', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message to be edited was sent</p>
     * @var int|string |null $chat_id  <p>Required if *inline\<em>message\</em>id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_id  <p>Required if *inline\<em>message\</em>id* is not specified. Identifier of the message to edit</p>
     * @var string|null $inline_message_id  <p>Required if *chat\<em>id* and *message\</em>id* are not specified. Identifier of the inline message</p>
     * @var string $text *(min length: 1)**(max length: 4096)* <p>New text of the message, 1-4096 characters after entities parsing</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the message text. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $entities  <p>A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse\_mode*</p>
     * @var \Milly\Laragram\Types\LinkPreviewOptions|null $link_preview_options  <p>Link preview generation options for the message</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|null $reply_markup  <p>A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.</p>
     * */

    public static function editMessageText (string $business_connection_id = null, int|string  $chat_id = null, int $message_id = null, string $inline_message_id = null, string $text, string $parse_mode = null, array $entities = null, \Milly\Laragram\Types\LinkPreviewOptions $link_preview_options = null, \Milly\Laragram\Types\InlineKeyboardMarkup $reply_markup = null, ) {
        return static::request('editMessageText', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message to be edited was sent</p>
     * @var int|string |null $chat_id  <p>Required if *inline\<em>message\</em>id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_id  <p>Required if *inline\<em>message\</em>id* is not specified. Identifier of the message to edit</p>
     * @var string|null $inline_message_id  <p>Required if *chat\<em>id* and *message\</em>id* are not specified. Identifier of the inline message</p>
     * @var string|null $caption *(min length: 0)**(max length: 1024)* <p>New caption of the message, 0-1024 characters after entities parsing</p>
     * @var string|null $parse_mode  <p>Mode for parsing entities in the message caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
     * @var array|null $caption_entities  <p>A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
     * @var bool|null $show_caption_above_media  <p>Pass *True*, if the caption must be shown above the message media. Supported only for animation, photo and video messages.</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|null $reply_markup  <p>A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.</p>
     * */

    public static function editMessageCaption (string $business_connection_id = null, int|string  $chat_id = null, int $message_id = null, string $inline_message_id = null, string $caption = null, string $parse_mode = null, array $caption_entities = null, bool $show_caption_above_media = null, \Milly\Laragram\Types\InlineKeyboardMarkup $reply_markup = null, ) {
        return static::request('editMessageCaption', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message to be edited was sent</p>
     * @var int|string |null $chat_id  <p>Required if *inline\<em>message\</em>id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_id  <p>Required if *inline\<em>message\</em>id* is not specified. Identifier of the message to edit</p>
     * @var string|null $inline_message_id  <p>Required if *chat\<em>id* and *message\</em>id* are not specified. Identifier of the inline message</p>
     * @var \Milly\Laragram\Types\InputMedia $media  <p>A JSON-serialized object for a new media content of the message</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|null $reply_markup  <p>A JSON-serialized object for a new <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.</p>
     * */

    public static function editMessageMedia (string $business_connection_id = null, int|string  $chat_id = null, int $message_id = null, string $inline_message_id = null, \Milly\Laragram\Types\InputMedia $media, \Milly\Laragram\Types\InlineKeyboardMarkup $reply_markup = null, ) {
        return static::request('editMessageMedia', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message to be edited was sent</p>
     * @var int|string |null $chat_id  <p>Required if *inline\<em>message\</em>id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_id  <p>Required if *inline\<em>message\</em>id* is not specified. Identifier of the message to edit</p>
     * @var string|null $inline_message_id  <p>Required if *chat\<em>id* and *message\</em>id* are not specified. Identifier of the inline message</p>
     * @var float $latitude  <p>Latitude of new location</p>
     * @var float $longitude  <p>Longitude of new location</p>
     * @var int|null $live_period  <p>New period in seconds during which the location can be updated, starting from the message send date. If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise, the new value must not exceed the current *live\<em>period* by more than a day, and the live location expiration date must remain within the next 90 days. If not specified, then *live\</em>period* remains unchanged</p>
     * @var float|null $horizontal_accuracy  <p>The radius of uncertainty for the location, measured in meters; 0-1500</p>
     * @var int|null $heading  <p>Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.</p>
     * @var int|null $proximity_alert_radius  <p>The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|null $reply_markup  <p>A JSON-serialized object for a new <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.</p>
     * */

    public static function editMessageLiveLocation (string $business_connection_id = null, int|string  $chat_id = null, int $message_id = null, string $inline_message_id = null, float $latitude, float $longitude, int $live_period = null, float $horizontal_accuracy = null, int $heading = null, int $proximity_alert_radius = null, \Milly\Laragram\Types\InlineKeyboardMarkup $reply_markup = null, ) {
        return static::request('editMessageLiveLocation', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message to be edited was sent</p>
     * @var int|string |null $chat_id  <p>Required if *inline\<em>message\</em>id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_id  <p>Required if *inline\<em>message\</em>id* is not specified. Identifier of the message with live location to stop</p>
     * @var string|null $inline_message_id  <p>Required if *chat\<em>id* and *message\</em>id* are not specified. Identifier of the inline message</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|null $reply_markup  <p>A JSON-serialized object for a new <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.</p>
     * */

    public static function stopMessageLiveLocation (string $business_connection_id = null, int|string  $chat_id = null, int $message_id = null, string $inline_message_id = null, \Milly\Laragram\Types\InlineKeyboardMarkup $reply_markup = null, ) {
        return static::request('stopMessageLiveLocation', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message to be edited was sent</p>
     * @var int|string |null $chat_id  <p>Required if *inline\<em>message\</em>id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_id  <p>Required if *inline\<em>message\</em>id* is not specified. Identifier of the message to edit</p>
     * @var string|null $inline_message_id  <p>Required if *chat\<em>id* and *message\</em>id* are not specified. Identifier of the inline message</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|null $reply_markup  <p>A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.</p>
     * */

    public static function editMessageReplyMarkup (string $business_connection_id = null, int|string  $chat_id = null, int $message_id = null, string $inline_message_id = null, \Milly\Laragram\Types\InlineKeyboardMarkup $reply_markup = null, ) {
        return static::request('editMessageReplyMarkup', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message to be edited was sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int $message_id  <p>Identifier of the original message with the poll</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|null $reply_markup  <p>A JSON-serialized object for a new message <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>.</p>
     * */

    public static function stopPoll (string $business_connection_id = null, int|string  $chat_id, int $message_id, \Milly\Laragram\Types\InlineKeyboardMarkup $reply_markup = null, ) {
        return static::request('stopPoll', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int $message_id  <p>Identifier of the message to delete</p>
     * */

    public static function deleteMessage (int|string  $chat_id, int $message_id, ) {
        return static::request('deleteMessage', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var array $message_ids  <p>A JSON-serialized list of 1-100 identifiers of messages to delete. See <a href="https://core.telegram.org/bots/api/#deletemessage">deleteMessage</a> for limitations on which messages can be deleted</p>
     * */

    public static function deleteMessages (int|string  $chat_id, array $message_ids, ) {
        return static::request('deleteMessages', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var \Milly\Laragram\Types\InputFile|string  $sticker  <p>Sticker to send. Pass a file\_id as String to send a file that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get a .WEBP sticker from the Internet, or upload a new .WEBP, .TGS, or .WEBM sticker using multipart/form-data. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a>. Video and animated stickers can't be sent via an HTTP URL.</p>
     * @var string|null $emoji  <p>Emoji associated with the sticker; only for just uploaded stickers</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply |null $reply_markup  <p>Additional interface options. A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>, <a href="https://core.telegram.org/bots/features#keyboards">custom reply keyboard</a>, instructions to remove a reply keyboard or to force a reply from the user</p>
     * */

    public static function sendSticker (string $business_connection_id = null, int|string  $chat_id, int $message_thread_id = null, \Milly\Laragram\Types\InputFile|string  $sticker, string $emoji = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  $reply_markup = null, ) {
        return static::request('sendSticker', func_get_args_associative());
    }

     /**
     * @var string $name  <p>Name of the sticker set</p>
     * */

    public static function getStickerSet (string $name, ) {
        return static::request('getStickerSet', func_get_args_associative());
    }

     /**
     * @var array $custom_emoji_ids  <p>A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.</p>
     * */

    public static function getCustomEmojiStickers (array $custom_emoji_ids, ) {
        return static::request('getCustomEmojiStickers', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>User identifier of sticker file owner</p>
     * @var \Milly\Laragram\Types\InputFile $sticker  <p>A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See <a href="https://core.telegram.org/stickers">https://core.telegram.org/stickers</a> for technical requirements. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
     * @var string $sticker_format  <p>Format of the sticker, must be one of “static”, “animated”, “video”</p>
     * */

    public static function uploadStickerFile (int $user_id, \Milly\Laragram\Types\InputFile $sticker, string $sticker_format, ) {
        return static::request('uploadStickerFile', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>User identifier of created sticker set owner</p>
     * @var string $name *(min length: 1)**(max length: 64)* <p>Short name of sticker set, to be used in `t.me/addstickers/` URLs (e.g., *animals*). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in `"<em>by</em><bot<em>username>"`. `<bot</em>username>` is case insensitive. 1-64 characters.</p>
     * @var string $title *(min length: 1)**(max length: 64)* <p>Sticker set title, 1-64 characters</p>
     * @var array $stickers  <p>A JSON-serialized list of 1-50 initial stickers to be added to the sticker set</p>
     * @var string|null $sticker_type  <p>Type of stickers in the set, pass “regular”, “mask”, or “custom\_emoji”. By default, a regular sticker set is created.</p>
     * @var bool|null $needs_repainting  <p>Pass *True* if stickers in the sticker set must be repainted to the color of text when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context; for custom emoji sticker sets only</p>
     * */

    public static function createNewStickerSet (int $user_id, string $name, string $title, array $stickers, string $sticker_type = null, bool $needs_repainting = null, ) {
        return static::request('createNewStickerSet', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>User identifier of sticker set owner</p>
     * @var string $name  <p>Sticker set name</p>
     * @var \Milly\Laragram\Types\InputSticker $sticker  <p>A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set isn't changed.</p>
     * */

    public static function addStickerToSet (int $user_id, string $name, \Milly\Laragram\Types\InputSticker $sticker, ) {
        return static::request('addStickerToSet', func_get_args_associative());
    }

     /**
     * @var string $sticker  <p>File identifier of the sticker</p>
     * @var int $position  <p>New sticker position in the set, zero-based</p>
     * */

    public static function setStickerPositionInSet (string $sticker, int $position, ) {
        return static::request('setStickerPositionInSet', func_get_args_associative());
    }

     /**
     * @var string $sticker  <p>File identifier of the sticker</p>
     * */

    public static function deleteStickerFromSet (string $sticker, ) {
        return static::request('deleteStickerFromSet', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>User identifier of the sticker set owner</p>
     * @var string $name  <p>Sticker set name</p>
     * @var string $old_sticker  <p>File identifier of the replaced sticker</p>
     * @var \Milly\Laragram\Types\InputSticker $sticker  <p>A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set remains unchanged.</p>
     * */

    public static function replaceStickerInSet (int $user_id, string $name, string $old_sticker, \Milly\Laragram\Types\InputSticker $sticker, ) {
        return static::request('replaceStickerInSet', func_get_args_associative());
    }

     /**
     * @var string $sticker  <p>File identifier of the sticker</p>
     * @var array $emoji_list  <p>A JSON-serialized list of 1-20 emoji associated with the sticker</p>
     * */

    public static function setStickerEmojiList (string $sticker, array $emoji_list, ) {
        return static::request('setStickerEmojiList', func_get_args_associative());
    }

     /**
     * @var string $sticker  <p>File identifier of the sticker</p>
     * @var array|null $keywords  <p>A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters</p>
     * */

    public static function setStickerKeywords (string $sticker, array $keywords = null, ) {
        return static::request('setStickerKeywords', func_get_args_associative());
    }

     /**
     * @var string $sticker  <p>File identifier of the sticker</p>
     * @var \Milly\Laragram\Types\MaskPosition|null $mask_position  <p>A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.</p>
     * */

    public static function setStickerMaskPosition (string $sticker, \Milly\Laragram\Types\MaskPosition $mask_position = null, ) {
        return static::request('setStickerMaskPosition', func_get_args_associative());
    }

     /**
     * @var string $name  <p>Sticker set name</p>
     * @var string $title *(min length: 1)**(max length: 64)* <p>Sticker set title, 1-64 characters</p>
     * */

    public static function setStickerSetTitle (string $name, string $title, ) {
        return static::request('setStickerSetTitle', func_get_args_associative());
    }

     /**
     * @var string $name  <p>Sticker set name</p>
     * @var int $user_id  <p>User identifier of the sticker set owner</p>
     * @var \Milly\Laragram\Types\InputFile|string |null $thumbnail  <p>A <strong>.WEBP</strong> or <strong>.PNG</strong> image with the thumbnail, must be up to 128 kilobytes in size and have a width and height of exactly 100px, or a <strong>.TGS</strong> animation with a thumbnail up to 32 kilobytes in size (see <a href="https://core.telegram.org/stickers#animation-requirements">https://core.telegram.org/stickers#animation-requirements</a> for animated sticker technical requirements), or a <strong>.WEBM</strong> video with the thumbnail up to 32 kilobytes in size; see <a href="https://core.telegram.org/stickers#video-requirements">https://core.telegram.org/stickers#video-requirements</a> for video sticker technical requirements. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a>. Animated and video sticker set thumbnails can't be uploaded via HTTP URL. If omitted, then the thumbnail is dropped and the first sticker is used as the thumbnail.</p>
     * @var string $format  <p>Format of the thumbnail, must be one of “static” for a <strong>.WEBP</strong> or <strong>.PNG</strong> image, “animated” for a <strong>.TGS</strong> animation, or “video” for a <strong>.WEBM</strong> video</p>
     * */

    public static function setStickerSetThumbnail (string $name, int $user_id, \Milly\Laragram\Types\InputFile|string  $thumbnail = null, string $format, ) {
        return static::request('setStickerSetThumbnail', func_get_args_associative());
    }

     /**
     * @var string $name  <p>Sticker set name</p>
     * @var string|null $custom_emoji_id  <p>Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail.</p>
     * */

    public static function setCustomEmojiStickerSetThumbnail (string $name, string $custom_emoji_id = null, ) {
        return static::request('setCustomEmojiStickerSetThumbnail', func_get_args_associative());
    }

     /**
     * @var string $name  <p>Sticker set name</p>
     * */

    public static function deleteStickerSet (string $name, ) {
        return static::request('deleteStickerSet', func_get_args_associative());
    }


    public static function getAvailableGifts () {
        return static::request('getAvailableGifts', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>Unique identifier of the target user that will receive the gift</p>
     * @var string $gift_id  <p>Identifier of the gift</p>
     * @var bool|null $pay_for_upgrade  <p>Pass *True* to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver</p>
     * @var string|null $text *(min length: 0)**(max length: 255)* <p>Text that will be shown along with the gift; 0-255 characters</p>
     * @var string|null $text_parse_mode  <p>Mode for parsing entities in the text. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom\_emoji” are ignored.</p>
     * @var array|null $text_entities  <p>A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of *text\<em>parse\</em>mode*. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom\_emoji” are ignored.</p>
     * */

    public static function sendGift (int $user_id, string $gift_id, bool $pay_for_upgrade = null, string $text = null, string $text_parse_mode = null, array $text_entities = null, ) {
        return static::request('sendGift', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * @var string|null $custom_description *(min length: 0)**(max length: 70)* <p>Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.</p>
     * */

    public static function verifyUser (int $user_id, string $custom_description = null, ) {
        return static::request('verifyUser', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var string|null $custom_description *(min length: 0)**(max length: 70)* <p>Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.</p>
     * */

    public static function verifyChat (int|string  $chat_id, string $custom_description = null, ) {
        return static::request('verifyChat', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>Unique identifier of the target user</p>
     * */

    public static function removeUserVerification (int $user_id, ) {
        return static::request('removeUserVerification', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * */

    public static function removeChatVerification (int|string  $chat_id, ) {
        return static::request('removeChatVerification', func_get_args_associative());
    }

     /**
     * @var string $inline_query_id  <p>Unique identifier for the answered query</p>
     * @var array $results  <p>A JSON-serialized array of results for the inline query</p>
     * @var int|null $cache_time *(default: 300)* <p>The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.</p>
     * @var bool|null $is_personal  <p>Pass *True* if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.</p>
     * @var string|null $next_offset  <p>Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.</p>
     * @var \Milly\Laragram\Types\InlineQueryResultsButton|null $button  <p>A JSON-serialized object describing a button to be shown above inline query results</p>
     * */

    public static function answerInlineQuery (string $inline_query_id, array $results, int $cache_time = null, bool $is_personal = null, string $next_offset = null, \Milly\Laragram\Types\InlineQueryResultsButton $button = null, ) {
        return static::request('answerInlineQuery', func_get_args_associative());
    }

     /**
     * @var string $web_app_query_id  <p>Unique identifier for the query to be answered</p>
     * @var \Milly\Laragram\Types\InlineQueryResult $result  <p>A JSON-serialized object describing the message to be sent</p>
     * */

    public static function answerWebAppQuery (string $web_app_query_id, \Milly\Laragram\Types\InlineQueryResult $result, ) {
        return static::request('answerWebAppQuery', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>Unique identifier of the target user that can use the prepared message</p>
     * @var \Milly\Laragram\Types\InlineQueryResult $result  <p>A JSON-serialized object describing the message to be sent</p>
     * @var bool|null $allow_user_chats  <p>Pass *True* if the message can be sent to private chats with users</p>
     * @var bool|null $allow_bot_chats  <p>Pass *True* if the message can be sent to private chats with bots</p>
     * @var bool|null $allow_group_chats  <p>Pass *True* if the message can be sent to group and supergroup chats</p>
     * @var bool|null $allow_channel_chats  <p>Pass *True* if the message can be sent to channel chats</p>
     * */

    public static function savePreparedInlineMessage (int $user_id, \Milly\Laragram\Types\InlineQueryResult $result, bool $allow_user_chats = null, bool $allow_bot_chats = null, bool $allow_group_chats = null, bool $allow_channel_chats = null, ) {
        return static::request('savePreparedInlineMessage', func_get_args_associative());
    }

     /**
     * @var int|string  $chat_id  <p>Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var string $title *(min length: 1)**(max length: 32)* <p>Product name, 1-32 characters</p>
     * @var string $description *(min length: 1)**(max length: 255)* <p>Product description, 1-255 characters</p>
     * @var string $payload  <p>Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.</p>
     * @var string|null $provider_token  <p>Payment provider token, obtained via <a href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var string $currency  <p>Three-letter ISO 4217 currency code, see <a href="https://core.telegram.org/bots/payments#supported-currencies">more on currencies</a>. Pass “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var array $prices  <p>Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var int|null $max_tip_amount *(default: 0)* <p>The maximum accepted amount for tips in the *smallest units* of the currency (integer, <strong>not</strong> float/double). For example, for a maximum tip of `US$ 1.45` pass `max<em>tip</em>amount = 145`. See the *exp* parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var array|null $suggested_tip_amounts  <p>A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, <strong>not</strong> float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\<em>tip\</em>amount*.</p>
     * @var string|null $start_parameter  <p>Unique deep-linking parameter. If left empty, <strong>forwarded copies</strong> of the sent message will have a *Pay* button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a *URL* button with a deep link to the bot (instead of a *Pay* button), with the value used as the start parameter</p>
     * @var string|null $provider_data  <p>JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.</p>
     * @var string|null $photo_url  <p>URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.</p>
     * @var int|null $photo_size  <p>Photo size in bytes</p>
     * @var int|null $photo_width  <p>Photo width</p>
     * @var int|null $photo_height  <p>Photo height</p>
     * @var bool|null $need_name  <p>Pass *True* if you require the user's full name to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $need_phone_number  <p>Pass *True* if you require the user's phone number to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $need_email  <p>Pass *True* if you require the user's email address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $need_shipping_address  <p>Pass *True* if you require the user's shipping address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $send_phone_number_to_provider  <p>Pass *True* if the user's phone number should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $send_email_to_provider  <p>Pass *True* if the user's email address should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $is_flexible  <p>Pass *True* if the final price depends on the shipping method. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|null $reply_markup  <p>A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>. If empty, one 'Pay `total price`' button will be shown. If not empty, the first button must be a Pay button.</p>
     * */

    public static function sendInvoice (int|string  $chat_id, int $message_thread_id = null, string $title, string $description, string $payload, string $provider_token = null, string $currency, array $prices, int $max_tip_amount = null, array $suggested_tip_amounts = null, string $start_parameter = null, string $provider_data = null, string $photo_url = null, int $photo_size = null, int $photo_width = null, int $photo_height = null, bool $need_name = null, bool $need_phone_number = null, bool $need_email = null, bool $need_shipping_address = null, bool $send_phone_number_to_provider = null, bool $send_email_to_provider = null, bool $is_flexible = null, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup $reply_markup = null, ) {
        return static::request('sendInvoice', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the link will be created. For payments in <a href="https://t.me/BotNews/90">Telegram Stars</a> only.</p>
     * @var string $title *(min length: 1)**(max length: 32)* <p>Product name, 1-32 characters</p>
     * @var string $description *(min length: 1)**(max length: 255)* <p>Product description, 1-255 characters</p>
     * @var string $payload  <p>Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.</p>
     * @var string|null $provider_token  <p>Payment provider token, obtained via <a href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var string $currency  <p>Three-letter ISO 4217 currency code, see <a href="https://core.telegram.org/bots/payments#supported-currencies">more on currencies</a>. Pass “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var array $prices  <p>Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var int|null $subscription_period  <p>The number of seconds the subscription will be active for before the next payment. The currency must be set to “XTR” (Telegram Stars) if the parameter is used. Currently, it must always be 2592000 (30 days) if specified. Any number of subscriptions can be active for a given bot at the same time, including multiple concurrent subscriptions from the same user. Subscription price must no exceed 2500 Telegram Stars.</p>
     * @var int|null $max_tip_amount *(default: 0)* <p>The maximum accepted amount for tips in the *smallest units* of the currency (integer, <strong>not</strong> float/double). For example, for a maximum tip of `US$ 1.45` pass `max<em>tip</em>amount = 145`. See the *exp* parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var array|null $suggested_tip_amounts  <p>A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, <strong>not</strong> float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\<em>tip\</em>amount*.</p>
     * @var string|null $provider_data  <p>JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.</p>
     * @var string|null $photo_url  <p>URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.</p>
     * @var int|null $photo_size  <p>Photo size in bytes</p>
     * @var int|null $photo_width  <p>Photo width</p>
     * @var int|null $photo_height  <p>Photo height</p>
     * @var bool|null $need_name  <p>Pass *True* if you require the user's full name to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $need_phone_number  <p>Pass *True* if you require the user's phone number to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $need_email  <p>Pass *True* if you require the user's email address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $need_shipping_address  <p>Pass *True* if you require the user's shipping address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $send_phone_number_to_provider  <p>Pass *True* if the user's phone number should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $send_email_to_provider  <p>Pass *True* if the user's email address should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * @var bool|null $is_flexible  <p>Pass *True* if the final price depends on the shipping method. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
     * */

    public static function createInvoiceLink (string $business_connection_id = null, string $title, string $description, string $payload, string $provider_token = null, string $currency, array $prices, int $subscription_period = null, int $max_tip_amount = null, array $suggested_tip_amounts = null, string $provider_data = null, string $photo_url = null, int $photo_size = null, int $photo_width = null, int $photo_height = null, bool $need_name = null, bool $need_phone_number = null, bool $need_email = null, bool $need_shipping_address = null, bool $send_phone_number_to_provider = null, bool $send_email_to_provider = null, bool $is_flexible = null, ) {
        return static::request('createInvoiceLink', func_get_args_associative());
    }

     /**
     * @var string $shipping_query_id  <p>Unique identifier for the query to be answered</p>
     * @var bool $ok  <p>Pass *True* if delivery to the specified address is possible and *False* if there are any problems (for example, if delivery to the specified address is not possible)</p>
     * @var array|null $shipping_options  <p>Required if *ok* is *True*. A JSON-serialized array of available shipping options.</p>
     * @var string|null $error_message  <p>Required if *ok* is *False*. Error message in human readable form that explains why it is impossible to complete the order (e.g. “Sorry, delivery to your desired address is unavailable”). Telegram will display this message to the user.</p>
     * */

    public static function answerShippingQuery (string $shipping_query_id, bool $ok, array $shipping_options = null, string $error_message = null, ) {
        return static::request('answerShippingQuery', func_get_args_associative());
    }

     /**
     * @var string $pre_checkout_query_id  <p>Unique identifier for the query to be answered</p>
     * @var bool $ok  <p>Specify *True* if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use *False* if there are any problems.</p>
     * @var string|null $error_message  <p>Required if *ok* is *False*. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.</p>
     * */

    public static function answerPreCheckoutQuery (string $pre_checkout_query_id, bool $ok, string $error_message = null, ) {
        return static::request('answerPreCheckoutQuery', func_get_args_associative());
    }

     /**
     * @var int|null $offset  <p>Number of transactions to skip in the response</p>
     * @var int|null $limit *(default: 100)* <p>The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.</p>
     * */

    public static function getStarTransactions (int $offset = null, int $limit = null, ) {
        return static::request('getStarTransactions', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>Identifier of the user whose payment will be refunded</p>
     * @var string $telegram_payment_charge_id  <p>Telegram payment identifier</p>
     * */

    public static function refundStarPayment (int $user_id, string $telegram_payment_charge_id, ) {
        return static::request('refundStarPayment', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>Identifier of the user whose subscription will be edited</p>
     * @var string $telegram_payment_charge_id  <p>Telegram payment identifier for the subscription</p>
     * @var bool $is_canceled  <p>Pass *True* to cancel extension of the user subscription; the subscription must be active up to the end of the current subscription period. Pass *False* to allow the user to re-enable a subscription that was previously canceled by the bot.</p>
     * */

    public static function editUserStarSubscription (int $user_id, string $telegram_payment_charge_id, bool $is_canceled, ) {
        return static::request('editUserStarSubscription', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>User identifier</p>
     * @var array $errors  <p>A JSON-serialized array describing the errors</p>
     * */

    public static function setPassportDataErrors (int $user_id, array $errors, ) {
        return static::request('setPassportDataErrors', func_get_args_associative());
    }

     /**
     * @var string|null $business_connection_id  <p>Unique identifier of the business connection on behalf of which the message will be sent</p>
     * @var int $chat_id  <p>Unique identifier for the target chat</p>
     * @var int|null $message_thread_id  <p>Unique identifier for the target message thread (topic) of the forum; for forum supergroups only</p>
     * @var string $game_short_name  <p>Short name of the game, serves as the unique identifier for the game. Set up your games via <a href="https://t.me/botfather">@BotFather</a>.</p>
     * @var bool|null $disable_notification  <p>Sends the message <a href="https://telegram.org/blog/channels-2-0#silent-messages">silently</a>. Users will receive a notification with no sound.</p>
     * @var bool|null $protect_content  <p>Protects the contents of the sent message from forwarding and saving</p>
     * @var bool|null $allow_paid_broadcast  <p>Pass *True* to allow up to 1000 messages per second, ignoring <a href="https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once">broadcasting limits</a> for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance</p>
     * @var string|null $message_effect_id  <p>Unique identifier of the message effect to be added to the message; for private chats only</p>
     * @var \Milly\Laragram\Types\ReplyParameters|null $reply_parameters  <p>Description of the message to reply to</p>
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|null $reply_markup  <p>A JSON-serialized object for an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a>. If empty, one 'Play game\_title' button will be shown. If not empty, the first button must launch the game.</p>
     * */

    public static function sendGame (string $business_connection_id = null, int $chat_id, int $message_thread_id = null, string $game_short_name, bool $disable_notification = null, bool $protect_content = null, bool $allow_paid_broadcast = null, string $message_effect_id = null, \Milly\Laragram\Types\ReplyParameters $reply_parameters = null, \Milly\Laragram\Types\InlineKeyboardMarkup $reply_markup = null, ) {
        return static::request('sendGame', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>User identifier</p>
     * @var int $score  <p>New score, must be non-negative</p>
     * @var bool|null $force  <p>Pass *True* if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters</p>
     * @var bool|null $disable_edit_message  <p>Pass *True* if the game message should not be automatically edited to include the current scoreboard</p>
     * @var int|null $chat_id  <p>Required if *inline\<em>message\</em>id* is not specified. Unique identifier for the target chat</p>
     * @var int|null $message_id  <p>Required if *inline\<em>message\</em>id* is not specified. Identifier of the sent message</p>
     * @var string|null $inline_message_id  <p>Required if *chat\<em>id* and *message\</em>id* are not specified. Identifier of the inline message</p>
     * */

    public static function setGameScore (int $user_id, int $score, bool $force = null, bool $disable_edit_message = null, int $chat_id = null, int $message_id = null, string $inline_message_id = null, ) {
        return static::request('setGameScore', func_get_args_associative());
    }

     /**
     * @var int $user_id  <p>Target user id</p>
     * @var int|null $chat_id  <p>Required if *inline\<em>message\</em>id* is not specified. Unique identifier for the target chat</p>
     * @var int|null $message_id  <p>Required if *inline\<em>message\</em>id* is not specified. Identifier of the sent message</p>
     * @var string|null $inline_message_id  <p>Required if *chat\<em>id* and *message\</em>id* are not specified. Identifier of the inline message</p>
     * */

    public static function getGameHighScores (int $user_id, int $chat_id = null, int $message_id = null, string $inline_message_id = null, ) {
        return static::request('getGameHighScores', func_get_args_associative());
    }


}

    /**
     * Get function arguments as associative array
     * (same as func_get_args() but with keys)
     *
     * @param bool $populateMissingArgumentsWithDefaults whether to populate the array with default values for missing arguments
     *
     * @return array
     */
    function func_get_args_associative(bool $populateMissingArgumentsWithDefaults = false): array
    {
        $trace = debug_backtrace(0, 2)[1];
        $reflection = isset($trace['class']) ? new \ReflectionMethod($trace['class'], $trace['function']) : new \ReflectionFunction($trace['function']);
        $ret = [];
        foreach ($reflection->getParameters() as $param) {
            if (array_key_exists($param->getPosition(), $trace['args'])) {
                $ret[$param->name] = $trace['args'][$param->getPosition()];
            } elseif ($populateMissingArgumentsWithDefaults) {
                assert($param->isDefaultValueAvailable(), 'i think all params are either in trace[args] or have default values');
                $ret[$param->name] = $param->getDefaultValue();
            }
        }
        return $ret;
    }