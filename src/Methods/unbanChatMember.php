<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* unbanChatMember
 *
 *Use this method to unban a previously banned user in a supergroup or channel. The user will **not** return to the group or channel automatically, but will be able to join via link, etc. The bot must be an administrator for this to work. By default, this method guarantees that after the call the user is not a member of the chat, but will be able to join it. So if the user is a member of the chat they will also be **removed** from the chat. If you don't want this, use the parameter *only\_if\_banned*. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#unbanchatmember
 * @abstract
 */
abstract class unbanChatMember extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var bool only_if_banned  Do nothing if the user is not banned
     * 
     * @access unbanChatMember
     */
     public static function unbanChatMember () {
        return true;
     }
}