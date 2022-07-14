<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* deleteWebhook
 *
 *Use this method to remove webhook integration if you decide to switch back to [getUpdates](https://core.telegram.org/bots/api/#getupdates). Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#deletewebhook
 * @abstract
 */
abstract class deleteWebhook extends Laragram
{
    /**
     * @var bool drop_pending_updates  Pass *True* to drop all pending updates
     * 
     * @access deleteWebhook
     */
     public static function deleteWebhook () {
        return true;
     }
}