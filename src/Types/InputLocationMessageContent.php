<?php

namespace Milly\Laragram\Types;


/**
* InputLocationMessageContent
 *
 *Represents the [content](https://core.telegram.org/bots/api/#inputmessagecontent) of a location message to be sent as the result of an inline query.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputlocationmessagecontent
 */
class InputLocationMessageContent
{
    /**
    * Latitude of the location in degrees
    * @var float
    */
    public float $latitude;

    /**
    * Longitude of the location in degrees
    * @var float
    */
    public float $longitude;

    /**
    * *Optional*. The radius of uncertainty for the location, measured in meters; 0-1500
    * @var float|null
    */
    public ?float $horizontal_accuracy = null;

    /**
    * *Optional*. Period in seconds for which the location can be updated, should be between 60 and 86400.
    * @var int|null
    */
    public ?int $live_period = null;

    /**
    * *Optional*. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
    * @var int|null
    */
    public ?int $heading = null;

    /**
    * *Optional*. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
    * @var int|null
    */
    public ?int $proximity_alert_radius = null;



    public function __construct($data)
    {
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
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