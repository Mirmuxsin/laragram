<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* banChatMember
 *
 *Use this method to ban a user in a group, a supergroup or a channel. In the case of supergroups and channels, the user will not be able to return to the chat on their own using invite links, etc., unless [unbanned](https://core.telegram.org/bots/api/#unbanchatmember) first. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#banchatmember
 * @abstract
 */
abstract class banChatMember extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target group or username of the target supergroup or channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var integer until_date  Date when the user will be unbanned, unix time. If user is banned for more than 366 days or less than 30 seconds from the current time they are considered to be banned forever. Applied for supergroups and channels only.
     * @var bool revoke_messages  Pass *True* to delete all messages from the chat for the user that is being removed. If *False*, the user will be able to see messages in the group that were sent before the user was removed. Always *True* for supergroups and channels.
     * 
     * @access banChatMember
     */
     public static function banChatMember () {
        return true;
     }
}