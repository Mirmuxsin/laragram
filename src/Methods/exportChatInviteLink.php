<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* exportChatInviteLink
 *
 *Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as *String* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#exportchatinvitelink
 * @abstract
 */
abstract class exportChatInviteLink extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * 
     * @access exportChatInviteLink
     */
     public static function exportChatInviteLink () {
        return true;
     }
}