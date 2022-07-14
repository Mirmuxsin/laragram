<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getChatMemberCount
 *
 *Use this method to get the number of members in a chat. Returns *Int* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getchatmembercount
 * @abstract
 */
abstract class getChatMemberCount extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * 
     * @access getChatMemberCount
     */
     public static function getChatMemberCount () {
        return true;
     }
}