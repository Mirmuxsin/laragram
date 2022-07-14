<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* copyMessage
 *
 *Use this method to copy messages of any kind. Service messages and invoice messages can't be copied. The method is analogous to the method [forwardMessage](https://core.telegram.org/bots/api/#forwardmessage), but the copied message doesn't have a link to the original message. Returns the [MessageId](https://core.telegram.org/bots/api/#messageid) of the sent message on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#copymessage
 * @abstract
 */
abstract class copyMessage extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer|string  from_chat_id *(required: true)* Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
     * @var integer message_id *(required: true)* Message identifier in the chat specified in *from\_chat\_id*
     * @var string caption *(min length: 0)**(max length: 0)* New caption for media, 0-1024 characters after entities parsing. If not specified, the original caption is kept
     * @var string parse_mode  Mode for parsing entities in the new caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the new caption, which can be specified instead of *parse\_mode*
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True*, if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating), [custom reply keyboard](https://core.telegram.org/bots#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * 
     * @access copyMessage
     */
     public static function copyMessage () {
        return true;
     }
}