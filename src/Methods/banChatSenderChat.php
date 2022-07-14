<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* banChatSenderChat
 *
 *Use this method to ban a channel chat in a supergroup or a channel. Until the chat is [unbanned](https://core.telegram.org/bots/api/#unbanchatsenderchat), the owner of the banned chat won't be able to send messages on behalf of **any of their channels**. The bot must be an administrator in the supergroup or channel for this to work and must have the appropriate administrator rights. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#banchatsenderchat
 * @abstract
 */
abstract class banChatSenderChat extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer sender_chat_id *(required: true)* Unique identifier of the target sender chat
     * 
     * @access banChatSenderChat
     */
     public static function banChatSenderChat () {
        return true;
     }
}