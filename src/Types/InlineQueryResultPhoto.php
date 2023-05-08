<?php

namespace Milly\Laragram\Types;


/**
* InlineQueryResultPhoto
 *
 *Represents a link to a photo. By default, this photo will be sent by the user with optional caption. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the photo.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultphoto
 */
class InlineQueryResultPhoto
{
    /**
    * Type of the result, must be *photo*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for this result, 1-64 bytes
    * @var string
    */
    public string $id;

    /**
    * A valid URL of the photo. Photo must be in **JPEG** format. Photo size must not exceed 5MB
    * @var string
    */
    public string $photo_url;

    /**
    * URL of the thumbnail for the photo
    * @var string
    */
    public string $thumbnail_url;

    /**
    * *Optional*. Width of the photo
    * @var int|null
    */
    public ?int $photo_width = null;

    /**
    * *Optional*. Height of the photo
    * @var int|null
    */
    public ?int $photo_height = null;

    /**
    * *Optional*. Title for the result
    * @var string|null
    */
    public ?string $title = null;

    /**
    * *Optional*. Short description of the result
    * @var string|null
    */
    public ?string $description = null;

    /**
    * *Optional*. Caption of the photo to be sent, 0-1024 characters after entities parsing
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * *Optional*. Mode for parsing entities in the photo caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * *Optional*. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * *Optional*. Content of the message to be sent instead of the photo
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->photo_url = $data['photo_url'];
        $this->thumbnail_url = $data['thumbnail_url'];
        if (isset($data['photo_width'])){
            $this->photo_width = $data['photo_width'];
        }

        if (isset($data['photo_height'])){
            $this->photo_height = $data['photo_height'];
        }

        if (isset($data['title'])){
            $this->title = $data['title'];
        }

        if (isset($data['description'])){
            $this->description = $data['description'];
        }

        if (isset($data['caption'])){
            $this->caption = $data['caption'];
        }

        if (isset($data['parse_mode'])){
            $this->parse_mode = $data['parse_mode'];
        }

        if (isset($data['caption_entities'])){
            $this->caption_entities = $data['caption_entities'];
        }

        if (isset($data['reply_markup'])){
            $this->reply_markup = new InlineKeyboardMarkup($data['reply_markup']);
        }

        if (isset($data['input_message_content'])){
            $this->input_message_content = new InputMessageContent($data['input_message_content']);
        }

    }
}