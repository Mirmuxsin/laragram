<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InlineQueryResultVenue
 *
 *Represents a venue. By default, the venue will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the venue.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultvenue
 */
class InlineQueryResultVenue extends Laragram
{
    /**
    * Type of the result, must be *venue*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for this result, 1-64 Bytes
    * @var string
    */
    public string $id;

    /**
    * Latitude of the venue location in degrees
    * @var float
    */
    public float $latitude;

    /**
    * Longitude of the venue location in degrees
    * @var float
    */
    public float $longitude;

    /**
    * Title of the venue
    * @var string
    */
    public string $title;

    /**
    * Address of the venue
    * @var string
    */
    public string $address;

    /**
    * *Optional*. Foursquare identifier of the venue if known
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

    /**
    * *Optional*. [Inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * *Optional*. Content of the message to be sent instead of the venue
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;

    /**
    * *Optional*. Url of the thumbnail for the result
    * @var string|null
    */
    public ?string $thumb_url = null;

    /**
    * *Optional*. Thumbnail width
    * @var int|null
    */
    public ?int $thumb_width = null;

    /**
    * *Optional*. Thumbnail height
    * @var int|null
    */
    public ?int $thumb_height = null;



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

        if (isset($data['thumb_url'])){
            $this->thumb_url = $data['thumb_url'];
        }

        if (isset($data['thumb_width'])){
            $this->thumb_width = $data['thumb_width'];
        }

        if (isset($data['thumb_height'])){
            $this->thumb_height = $data['thumb_height'];
        }

    }
}