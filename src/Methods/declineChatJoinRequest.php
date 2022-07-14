<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* declineChatJoinRequest
 *
 *Use this method to decline a chat join request. The bot must be an administrator in the chat for this to work and must have the *can\_invite\_users* administrator right. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#declinechatjoinrequest
 * @abstract
 */
abstract class declineChatJoinRequest extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * 
     * @access declineChatJoinRequest
     */
     public static function declineChatJoinRequest () {
        return true;
     }
}