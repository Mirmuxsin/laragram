<?php

namespace Milly\Laragram\Types;


/**
* Location
 *
 *This object represents a point on the map.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#location
 */
class Location
{
    /**
    * Longitude as defined by sender
    * @var float
    */
    public float $longitude;

    /**
    * Latitude as defined by sender
    * @var float
    */
    public float $latitude;

    /**
    * *Optional*. The radius of uncertainty for the location, measured in meters; 0-1500
    * @var float|null
    */
    public ?float $horizontal_accuracy = null;

    /**
    * *Optional*. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
    * @var int|null
    */
    public ?int $live_period = null;

    /**
    * *Optional*. The direction in which user is moving, in degrees; 1-360. For active live locations only.
    * @var int|null
    */
    public ?int $heading = null;

    /**
    * *Optional*. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
    * @var int|null
    */
    public ?int $proximity_alert_radius = null;



    public function __construct($data)
    {
        $this->longitude = $data['longitude'];
        $this->latitude = $data['latitude'];
        if (isset($data['horizontal_accuracy'])){
            $this->horizontal_accuracy = $data['horizontal_accuracy'];
        }

        if (isset($data['live_period'])){
            $this->live_period = $data['live_period'];
        }

        if (isset($data['heading'])){
            $this->heading = $data['heading'];
        }

        if (isset($data['proximity_alert_radius'])){
            $this->proximity_alert_radius = $data['proximity_alert_radius'];
        }

    }
}