<?php

namespace Milly\Laragram\Types;

/**
* ProximityAlertTriggered
 *
 *<p>The distance between the users</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#proximityalerttriggered
 */
class ProximityAlertTriggered
{
    /**
    * <p>User that triggered the alert</p>
    * @var User
    */
    public User $traveler;

    /**
    * <p>User that set the alert</p>
    * @var User
    */
    public User $watcher;

    /**
    * <p>The distance between the users</p>
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