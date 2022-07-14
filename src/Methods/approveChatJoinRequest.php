<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* approveChatJoinRequest
 *
 *Use this method to approve a chat join request. The bot must be an administrator in the chat for this to work and must have the *can\_invite\_users* administrator right. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#approvechatjoinrequest
 * @abstract
 */
abstract class approveChatJoinRequest extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * 
     * @access approveChatJoinRequest
     */
     public static function approveChatJoinRequest () {
        return true;
     }
}