<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* sendMessage
 *
 *Use this method to send text messages. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sendmessage
 * @abstract
 */
abstract class sendMessage extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string text *(required: true)**(min length: 1)**(max length: 1)* Text of the message to be sent, 1-4096 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array entities  A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse\_mode*
     * @var bool disable_web_page_preview  Disables link previews for links in this message
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True*, if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating), [custom reply keyboard](https://core.telegram.org/bots#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     *
     * @access sendMessage
     */
     public static function sendMessage ($chat_id) {
        return true;
     }
}
