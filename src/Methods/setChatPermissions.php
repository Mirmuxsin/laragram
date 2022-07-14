<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setChatPermissions
 *
 *Use this method to set default chat permissions for all members. The bot must be an administrator in the group or a supergroup for this to work and must have the *can\_restrict\_members* administrator rights. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setchatpermissions
 * @abstract
 */
abstract class setChatPermissions extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var \Milly\Laragram\Types\ChatPermissions permissions *(required: true)* A JSON-serialized object for new default chat permissions
     * 
     * @access setChatPermissions
     */
     public static function setChatPermissions () {
        return true;
     }
}