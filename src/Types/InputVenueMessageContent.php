<?php

namespace Milly\Laragram\Types;


/**
* InputVenueMessageContent
 *
 *Represents the [content](https://core.telegram.org/bots/api/#inputmessagecontent) of a venue message to be sent as the result of an inline query.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputvenuemessagecontent
 */
class InputVenueMessageContent
{
    /**
    * Latitude of the venue in degrees
    * @var float
    */
    public float $latitude;

    /**
    * Longitude of the venue in degrees
    * @var float
    */
    public float $longitude;

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
    * *Optional*. Foursquare identifier of the venue, if known
    * @var string|null
    */
    public ?string $foursquare_id = null;

    /**
    * *Optional*. Foursquare type of the venue, if known. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
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
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
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