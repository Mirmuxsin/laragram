<?php

namespace Milly\Laragram\Types;


/**
* Venue
 *
 *This object represents a venue.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#venue
 */
class Venue
{
    /**
    * Venue location. Can't be a live location
    * @var Location
    */
    public Location $location;

    /**
    * Name of the venue
    * @var string
    */
    public string $title;

    /**
    * Address of the venue
    * @var string
    */
    public string $address;

    /**
    * *Optional*. Foursquare identifier of the venue
    * @var string|null
    */
    public ?string $foursquare_id = null;

    /**
    * *Optional*. Foursquare type of the venue. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
    * @var string|null
    */
    public ?string $foursquare_type = null;

    /**
    * *Optional*. Google Places identifier of the venue
    * @var string|null
    */
    public ?string $google_place_id = null;

    /**
    * *Optional*. Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
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