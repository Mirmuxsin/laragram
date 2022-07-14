<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* unpinAllChatMessages
 *
 *Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can\_pin\_messages' administrator right in a supergroup or 'can\_edit\_messages' administrator right in a channel. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#unpinallchatmessages
 * @abstract
 */
abstract class unpinAllChatMessages extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * 
     * @access unpinAllChatMessages
     */
     public static function unpinAllChatMessages () {
        return true;
     }
}