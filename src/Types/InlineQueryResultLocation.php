<?php

namespace Milly\Laragram\Types;


/**
* InlineQueryResultLocation
 *
 *<p>*Optional*. Thumbnail height</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultlocation
 */
class InlineQueryResultLocation
{
    /**
    * <p>Type of the result, must be *location*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for this result, 1-64 Bytes</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Location latitude in degrees</p>
    * @var float
    */
    public float $latitude;

    /**
    * <p>Location longitude in degrees</p>
    * @var float
    */
    public float $longitude;

    /**
    * <p>Location title</p>
    * @var string
    */
    public string $title;

    /**
    * <p>*Optional*. The radius of uncertainty for the location, measured in meters; 0-1500</p>
    * @var float|null
    */
    public ?float $horizontal_accuracy = null;

    /**
    * <p>*Optional*. Period in seconds for which the location can be updated, should be between 60 and 86400.</p>
    * @var int|null
    */
    public ?int $live_period = null;

    /**
    * <p>*Optional*. For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.</p>
    * @var int|null
    */
    public ?int $heading = null;

    /**
    * <p>*Optional*. For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.</p>
    * @var int|null
    */
    public ?int $proximity_alert_radius = null;

    /**
    * <p>*Optional*. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message</p>
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * <p>*Optional*. Content of the message to be sent instead of the location</p>
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