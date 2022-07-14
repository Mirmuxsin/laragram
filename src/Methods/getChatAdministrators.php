<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getChatAdministrators
 *
 *Use this method to get a list of administrators in a chat. On success, returns an Array of [ChatMember](https://core.telegram.org/bots/api/#chatmember) objects that contains information about all chat administrators except other bots. If the chat is a group or a supergroup and no administrators were appointed, only the creator will be returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getchatadministrators
 * @abstract
 */
abstract class getChatAdministrators extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * 
     * @access getChatAdministrators
     */
     public static function getChatAdministrators () {
        return true;
     }
}