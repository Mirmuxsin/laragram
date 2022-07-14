<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* leaveChat
 *
 *Use this method for your bot to leave a group, supergroup or channel. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#leavechat
 * @abstract
 */
abstract class leaveChat extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * 
     * @access leaveChat
     */
     public static function leaveChat () {
        return true;
     }
}