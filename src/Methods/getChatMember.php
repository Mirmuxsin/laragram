<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getChatMember
 *
 *Use this method to get information about a member of a chat. Returns a [ChatMember](https://core.telegram.org/bots/api/#chatmember) object on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getchatmember
 * @abstract
 */
abstract class getChatMember extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * 
     * @access getChatMember
     */
     public static function getChatMember () {
        return true;
     }
}