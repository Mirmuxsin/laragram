<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* unpinChatMessage
 *
 *Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can\_pin\_messages' administrator right in a supergroup or 'can\_edit\_messages' administrator right in a channel. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#unpinchatmessage
 * @abstract
 */
abstract class unpinChatMessage extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Identifier of a message to unpin. If not specified, the most recent pinned message (by sending date) will be unpinned.
     * 
     * @access unpinChatMessage
     */
     public static function unpinChatMessage () {
        return true;
     }
}