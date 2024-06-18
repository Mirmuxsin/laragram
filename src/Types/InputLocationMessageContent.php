<?php

namespace Milly\Laragram\Types;


/**
* InputLocationMessageContent
 *
 *<p>*Optional*. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputlocationmessagecontent
 */
class InputLocationMessageContent
{
    /**
    * <p>Latitude of the location in degrees</p>
    * @var float
    */
    public float $latitude;

    /**
    * <p>Longitude of the location in degrees</p>
    * @var float
    */
    public float $longitude;

    /**
    * <p>*Optional*. The radius of uncertainty for the location, measured in meters; 0-1500</p>
    * @var float|null
    */
    public ?float $horizontal_accuracy = null;

    /**
    * <p>*Optional*. Period in seconds during which the location can be updated, should be between 60 and 86400, or 0x7FFFFFFF for live locations that can be edited indefinitely.</p>
    * @var int|null
    */
    public ?int $live_period = null;

    /**
    * <p>*Optional*. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.</p>
    * @var int|null
    */
    public ?int $heading = null;

    /**
    * <p>*Optional*. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.</p>
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