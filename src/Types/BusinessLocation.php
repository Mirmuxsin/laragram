<?php

namespace Milly\Laragram\Types;

/**
* BusinessLocation
 *
 *<p>*Optional*. Location of the business</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#businesslocation
 */
class BusinessLocation
{
    /**
    * <p>Address of the business</p>
    * @var string
    */
    public string $address;

    /**
    * <p>*Optional*. Location of the business</p>
    * @var Location|null
    */
    public ?Location $location = null;



    public function __construct($data)
    {
        $this->address = $data['address'];
        if (isset($data['location'])){
            $this->location = new Location($data['location']);
        }

    }
}