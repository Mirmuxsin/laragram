<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ProximityAlertTriggered
 *
 *This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#proximityalerttriggered
 */
class ProximityAlertTriggered extends Laragram
{
    /**
    * User that triggered the alert
    * @var User
    */
    public User $traveler;

    /**
    * User that set the alert
    * @var User
    */
    public User $watcher;

    /**
    * The distance between the users
    * @var int
    */
    public int $distance;



    public function __construct($data)
    {
        $this->traveler = new User($data['traveler']);

        $this->watcher = new User($data['watcher']);

        $this->distance = $data['distance'];
    }
}