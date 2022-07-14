<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InlineQueryResultLocation
 *
 *Represents a location on a map. By default, the location will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the location.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultlocation
 */
class InlineQueryResultLocation extends Laragram
{
    /**
    * Type of the result, must be *location*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for this result, 1-64 Bytes
    * @var string
    */
    public string $id;

    /**
    * Location latitude in degrees
    * @var float
    */
    public float $latitude;

    /**
    * Location longitude in degrees
    * @var float
    */
    public float $longitude;

    /**
    * Location title
    * @var string
    */
    public string $title;

    /**
    * *Optional*. The radius of uncertainty for the location, measured in meters; 0-1500
    * @var float|null
    */
    public ?float $horizontal_accuracy = null;

    /**
    * *Optional*. Period in seconds for which the location can be updated, should be between 60 and 86400.
    * @var int|null
    */
    public ?int $live_period = null;

    /**
    * *Optional*. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
    * @var int|null
    */
    public ?int $heading = null;

    /**
    * *Optional*. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
    * @var int|null
    */
    public ?int $proximity_alert_radius = null;

    /**
    * *Optional*. [Inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * *Optional*. Content of the message to be sent instead of the location
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