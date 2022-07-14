<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* sendAnimation
 *
 *Use this method to send animation files (GIF or H.264/MPEG-4 AVC video without sound). On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned. Bots can currently send animation files of up to 50 MB in size, this limit may be changed in the future.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sendanimation
 * @abstract
 */
abstract class sendAnimation extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var \Milly\Laragram\Types\InputFile|string  animation *(required: true)* Animation to send. Pass a file\_id as String to send an animation that exists on the Telegram servers (recommended), pass an HTTP URL as a String for Telegram to get an animation from the Internet, or upload a new animation using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var integer duration  Duration of sent animation in seconds
     * @var integer width  Animation width
     * @var integer height  Animation height
     * @var \Milly\Laragram\Types\InputFile|string  thumb  Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://<file\_attach\_name>” if the thumbnail was uploaded using multipart/form-data under <file\_attach\_name>. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var string caption *(min length: 0)**(max length: 0)* Animation caption (may also be used when resending animation by *file\_id*), 0-1024 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the animation caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True*, if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating), [custom reply keyboard](https://core.telegram.org/bots#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * 
     * @access sendAnimation
     */
     public static function sendAnimation () {
        return true;
     }
}