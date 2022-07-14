<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getMyDefaultAdministratorRights
 *
 *Use this method to get the current default administrator rights of the bot. Returns [ChatAdministratorRights](https://core.telegram.org/bots/api/#chatadministratorrights) on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getmydefaultadministratorrights
 * @abstract
 */
abstract class getMyDefaultAdministratorRights extends Laragram
{
    /**
     * @var bool for_channels  Pass *True* to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.
     * 
     * @access getMyDefaultAdministratorRights
     */
     public static function getMyDefaultAdministratorRights () {
        return true;
     }
}