<?php

namespace Milly\Laragram\Types;


/**
* ChatLocation
 *
 *<p>Location address; 1-64 characters, as defined by the chat owner</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatlocation
 */
class ChatLocation
{
    /**
    * <p>The location to which the supergroup is connected. Can't be a live location.</p>
    * @var Location
    */
    public Location $location;

    /**
    * <p>Location address; 1-64 characters, as defined by the chat owner</p>
    * @var string
    */
    public string $address;



    public function __construct($data)
    {
        $this->location = new Location($data['location']);

        $this->address = $data['address'];
    }
}