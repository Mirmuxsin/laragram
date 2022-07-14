<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setMyDefaultAdministratorRights
 *
 *Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are are free to modify the list before adding the bot. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setmydefaultadministratorrights
 * @abstract
 */
abstract class setMyDefaultAdministratorRights extends Laragram
{
    /**
     * @var \Milly\Laragram\Types\ChatAdministratorRights rights  A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
     * @var bool for_channels  Pass *True* to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.
     * 
     * @access setMyDefaultAdministratorRights
     */
     public static function setMyDefaultAdministratorRights () {
        return true;
     }
}