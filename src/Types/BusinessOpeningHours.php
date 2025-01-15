<?php

namespace Milly\Laragram\Types;

/**
* BusinessOpeningHours
 *
 *<p>List of time intervals describing business opening hours</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#businessopeninghours
 */
class BusinessOpeningHours
{
    /**
    * <p>Unique name of the time zone for which the opening hours are defined</p>
    * @var string
    */
    public string $time_zone_name;

    /**
    * <p>List of time intervals describing business opening hours</p>
    * @var array
    */
    public array $opening_hours;



    public function __construct($data)
    {
        $this->time_zone_name = $data['time_zone_name'];
        $this->opening_hours = $data['opening_hours'];
    }
}