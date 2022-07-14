<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* restrictChatMember
 *
 *Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass *True* for all permissions to lift restrictions from a user. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#restrictchatmember
 * @abstract
 */
abstract class restrictChatMember extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var \Milly\Laragram\Types\ChatPermissions permissions *(required: true)* A JSON-serialized object for new user permissions
     * @var integer until_date  Date when restrictions will be lifted for the user, unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever
     * 
     * @access restrictChatMember
     */
     public static function restrictChatMember () {
        return true;
     }
}