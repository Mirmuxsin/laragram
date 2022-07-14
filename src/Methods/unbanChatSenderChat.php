<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* unbanChatSenderChat
 *
 *Use this method to unban a previously banned channel chat in a supergroup or channel. The bot must be an administrator for this to work and must have the appropriate administrator rights. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#unbanchatsenderchat
 * @abstract
 */
abstract class unbanChatSenderChat extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer sender_chat_id *(required: true)* Unique identifier of the target sender chat
     * 
     * @access unbanChatSenderChat
     */
     public static function unbanChatSenderChat () {
        return true;
     }
}