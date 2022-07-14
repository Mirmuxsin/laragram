<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* forwardMessage
 *
 *Use this method to forward messages of any kind. Service messages can't be forwarded. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#forwardmessage
 * @abstract
 */
abstract class forwardMessage extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer|string  from_chat_id *(required: true)* Unique identifier for the chat where the original message was sent (or channel username in the format `@channelusername`)
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the forwarded message from forwarding and saving
     * @var integer message_id *(required: true)* Message identifier in the chat specified in *from\_chat\_id*
     * 
     * @access forwardMessage
     */
     public static function forwardMessage () {
        return true;
     }
}