<?php

namespace Milly\Laragram\Types;


/**
* InlineQueryResultVenue
 *
 *<p>*Optional*. Thumbnail height</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultvenue
 */
class InlineQueryResultVenue
{
    /**
    * <p>Type of the result, must be *venue*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for this result, 1-64 Bytes</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Latitude of the venue location in degrees</p>
    * @var float
    */
    public float $latitude;

    /**
    * <p>Longitude of the venue location in degrees</p>
    * @var float
    */
    public float $longitude;

    /**
    * <p>Title of the venue</p>
    * @var string
    */
    public string $title;

    /**
    * <p>Address of the venue</p>
    * @var string
    */
    public string $address;

    /**
    * <p>*Optional*. Foursquare identifier of the venue if known</p>
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

    /**
    * <p>*Optional*. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message</p>
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * <p>*Optional*. Content of the message to be sent instead of the venue</p>
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;

    /**
    * <p>*Optional*. Url of the thumbnail for the result</p>
    * @var string|null
    */
    public ?string $thumbnail_url = null;

    /**
    * <p>*Optional*. Thumbnail width</p>
    * @var int|null
    */
    public ?int $thumbnail_width = null;

    /**
    * <p>*Optional*. Thumbnail height</p>
    * @var int|null
    */
    public ?int $thumbnail_height = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
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

        if (isset($data['reply_markup'])){
            $this->reply_markup = new InlineKeyboardMarkup($data['reply_markup']);
        }

        if (isset($data['input_message_content'])){
            $this->input_message_content = new InputMessageContent($data['input_message_content']);
        }

        if (isset($data['thumbnail_url'])){
            $this->thumbnail_url = $data['thumbnail_url'];
        }

        if (isset($data['thumbnail_width'])){
            $this->thumbnail_width = $data['thumbnail_width'];
        }

        if (isset($data['thumbnail_height'])){
            $this->thumbnail_height = $data['thumbnail_height'];
        }

    }
}