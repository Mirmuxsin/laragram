<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* sendMediaGroup
 *
 *Use this method to send a group of photos, videos, documents or audios as an album. Documents and audio files can be only grouped in an album with messages of the same type. On success, an array of [Messages](https://core.telegram.org/bots/api/#message) that were sent is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sendmediagroup
 * @abstract
 */
abstract class sendMediaGroup extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var array media *(required: true)* A JSON-serialized array describing messages to be sent, must include 2-10 items
     * @var bool disable_notification  Sends messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent messages from forwarding and saving
     * @var integer reply_to_message_id  If the messages are a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True*, if the message should be sent even if the specified replied-to message is not found
     * 
     * @access sendMediaGroup
     */
     public static function sendMediaGroup () {
        return true;
     }
}