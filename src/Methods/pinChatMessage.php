<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* pinChatMessage
 *
 *Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can\_pin\_messages' administrator right in a supergroup or 'can\_edit\_messages' administrator right in a channel. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#pinchatmessage
 * @abstract
 */
abstract class pinChatMessage extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id *(required: true)* Identifier of a message to pin
     * @var bool disable_notification  Pass *True*, if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.
     * 
     * @access pinChatMessage
     */
     public static function pinChatMessage () {
        return true;
     }
}