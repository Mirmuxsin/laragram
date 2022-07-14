<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* editChatInviteLink
 *
 *Use this method to edit a non-primary invite link created by the bot. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the edited invite link as a [ChatInviteLink](https://core.telegram.org/bots/api/#chatinvitelink) object.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#editchatinvitelink
 * @abstract
 */
abstract class editChatInviteLink extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string invite_link *(required: true)* The invite link to edit
     * @var string name *(min length: 0)**(max length: 0)* Invite link name; 0-32 characters
     * @var integer expire_date  Point in time (Unix timestamp) when the link will expire
     * @var integer member_limit  The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
     * @var bool creates_join_request  *True*, if users joining the chat via the link need to be approved by chat administrators. If *True*, *member\_limit* can't be specified
     * 
     * @access editChatInviteLink
     */
     public static function editChatInviteLink () {
        return true;
     }
}