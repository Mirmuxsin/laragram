<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* revokeChatInviteLink
 *
 *Use this method to revoke an invite link created by the bot. If the primary link is revoked, a new link is automatically generated. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the revoked invite link as [ChatInviteLink](https://core.telegram.org/bots/api/#chatinvitelink) object.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#revokechatinvitelink
 * @abstract
 */
abstract class revokeChatInviteLink extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier of the target chat or username of the target channel (in the format `@channelusername`)
     * @var string invite_link *(required: true)* The invite link to revoke
     * 
     * @access revokeChatInviteLink
     */
     public static function revokeChatInviteLink () {
        return true;
     }
}