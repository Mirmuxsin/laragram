<?php

namespace Milly\Laragram\Types;


/**
* Venue
 *
 *<p>*Optional*. Google Places type of the venue. (See <a href="https://developers.google.com/places/web-service/supported_types">supported types</a>.)</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#venue
 */
class Venue
{
    /**
    * <p>Venue location. Can't be a live location</p>
    * @var Location
    */
    public Location $location;

    /**
    * <p>Name of the venue</p>
    * @var string
    */
    public string $title;

    /**
    * <p>Address of the venue</p>
    * @var string
    */
    public string $address;

    /**
    * <p>*Optional*. Foursquare identifier of the venue</p>
    * @var string|null
    */
    public ?string $foursquare_id = null;

    /**
    * <p>*Optional*. Foursquare type of the venue. (For example, “arts\<em>entertainment/default”, “arts\</em>entertainment/aquarium” or “food/icecream”.)</p>
    * @var string|null
    */
    public ?string $foursquare_type = null;

    /**
    * <p>*Optional*. Google Places identifier of the venue</p>
    * @var string|null
    */
    public ?string $google_place_id = null;

    /**
    * <p>*Optional*. Google Places type of the venue. (See <a href="https://developers.google.com/places/web-service/supported_types">supported types</a>.)</p>
    * @var string|null
    */
    public ?string $google_place_type = null;



    public function __construct($data)
    {
        $this->location = new Location($data['location']);

        $this->title = $data['title'];
        $this->address = $data['address'];
        if (isset($data['foursquare_id'])){
            $this->foursquare_id = $data['foursquare_id'];
        }

        if (isset($data['foursquare_type'])){
            $this->foursquare_type = $data['foursquare_type'];
        }

        if (isset($data['google_place_id'])){
            $this->google_place_id = $data['google_place_id'];
        }

        if (isset($data['google_place_type'])){
            $this->google_place_type = $data['google_place_type'];
        }

    }
}