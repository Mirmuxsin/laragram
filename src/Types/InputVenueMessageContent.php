<?php

namespace Milly\Laragram\Types;

/**
* InputVenueMessageContent
 *
 *<p>*Optional*. Google Places type of the venue. (See <a href="https://developers.google.com/places/web-service/supported_types">supported types</a>.)</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputvenuemessagecontent
 */
class InputVenueMessageContent
{
    /**
    * <p>Latitude of the venue in degrees</p>
    * @var float
    */
    public float $latitude;

    /**
    * <p>Longitude of the venue in degrees</p>
    * @var float
    */
    public float $longitude;

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
    * <p>*Optional*. Foursquare identifier of the venue, if known</p>
    * @var string|null
    */
    public ?string $foursquare_id = null;

    /**
    * <p>*Optional*. Foursquare type of the venue, if known. (For example, “arts\<em>entertainment/default”, “arts\</em>entertainment/aquarium” or “food/icecream”.)</p>
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