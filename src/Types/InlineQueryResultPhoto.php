<?php

namespace Milly\Laragram\Types;


/**
* InlineQueryResultPhoto
 *
 *<p>*Optional*. Content of the message to be sent instead of the photo</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultphoto
 */
class InlineQueryResultPhoto
{
    /**
    * <p>Type of the result, must be *photo*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for this result, 1-64 bytes</p>
    * @var string
    */
    public string $id;

    /**
    * <p>A valid URL of the photo. Photo must be in <strong>JPEG</strong> format. Photo size must not exceed 5MB</p>
    * @var string
    */
    public string $photo_url;

    /**
    * <p>URL of the thumbnail for the photo</p>
    * @var string
    */
    public string $thumbnail_url;

    /**
    * <p>*Optional*. Width of the photo</p>
    * @var int|null
    */
    public ?int $photo_width = null;

    /**
    * <p>*Optional*. Height of the photo</p>
    * @var int|null
    */
    public ?int $photo_height = null;

    /**
    * <p>*Optional*. Title for the result</p>
    * @var string|null
    */
    public ?string $title = null;

    /**
    * <p>*Optional*. Short description of the result</p>
    * @var string|null
    */
    public ?string $description = null;

    /**
    * <p>*Optional*. Caption of the photo to be sent, 0-1024 characters after entities parsing</p>
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * <p>*Optional*. Mode for parsing entities in the photo caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * <p>*Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * <p>*Optional*. Pass *True*, if the caption must be shown above the message media</p>
    * @var bool|null
    */
    public ?bool $show_caption_above_media = null;

    /**
    * <p>*Optional*. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message</p>
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * <p>*Optional*. Content of the message to be sent instead of the photo</p>
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

        if (isset($data['show_caption_above_media'])){
            $this->show_caption_above_media = $data['show_caption_above_media'];
        }

        if (isset($data['reply_markup'])){
            $this->reply_markup = new InlineKeyboardMarkup($data['reply_markup']);
        }

        if (isset($data['input_message_content'])){
            $this->input_message_content = new InputMessageContent($data['input_message_content']);
        }

    }
}