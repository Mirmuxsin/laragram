<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* promoteChatMember
 *
 *Use this method to promote or demote a user in a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Pass *False* for all boolean parameters to demote a user. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#promotechatmember
 * @abstract
 */
abstract class promoteChatMember extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var bool is_anonymous  Pass *True*, if the administrator's presence in the chat is hidden
     * @var bool can_manage_chat  Pass *True*, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
     * @var bool can_post_messages  Pass *True*, if the administrator can create channel posts, channels only
     * @var bool can_edit_messages  Pass *True*, if the administrator can edit messages of other users and can pin messages, channels only
     * @var bool can_delete_messages  Pass *True*, if the administrator can delete messages of other users
     * @var bool can_manage_video_chats  Pass *True*, if the administrator can manage video chats
     * @var bool can_restrict_members  Pass *True*, if the administrator can restrict, ban or unban chat members
     * @var bool can_promote_members  Pass *True*, if the administrator can add new administrators with a subset of their own privileges or demote administrators that he has promoted, directly or indirectly (promoted by administrators that were appointed by him)
     * @var bool can_change_info  Pass *True*, if the administrator can change chat title, photo and other settings
     * @var bool can_invite_users  Pass *True*, if the administrator can invite new users to the chat
     * @var bool can_pin_messages  Pass *True*, if the administrator can pin messages, supergroups only
     * 
     * @access promoteChatMember
     */
     public static function promoteChatMember () {
        return true;
     }
}