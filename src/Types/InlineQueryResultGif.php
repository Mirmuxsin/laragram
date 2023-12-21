<?php

namespace Milly\Laragram\Types;


/**
* InlineQueryResultGif
 *
 *<p>*Optional*. Content of the message to be sent instead of the GIF animation</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultgif
 */
class InlineQueryResultGif
{
    /**
    * <p>Type of the result, must be *gif*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for this result, 1-64 bytes</p>
    * @var string
    */
    public string $id;

    /**
    * <p>A valid URL for the GIF file. File size must not exceed 1MB</p>
    * @var string
    */
    public string $gif_url;

    /**
    * <p>*Optional*. Width of the GIF</p>
    * @var int|null
    */
    public ?int $gif_width = null;

    /**
    * <p>*Optional*. Height of the GIF</p>
    * @var int|null
    */
    public ?int $gif_height = null;

    /**
    * <p>*Optional*. Duration of the GIF in seconds</p>
    * @var int|null
    */
    public ?int $gif_duration = null;

    /**
    * <p>URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result</p>
    * @var string
    */
    public string $thumbnail_url;

    /**
    * <p>*Optional*. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”</p>
    * @var string|null
    */
    public ?string $thumbnail_mime_type = null;

    /**
    * <p>*Optional*. Title for the result</p>
    * @var string|null
    */
    public ?string $title = null;

    /**
    * <p>*Optional*. Caption of the GIF file to be sent, 0-1024 characters after entities parsing</p>
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * <p>*Optional*. Mode for parsing entities in the caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * <p>*Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * <p>*Optional*. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message</p>
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * <p>*Optional*. Content of the message to be sent instead of the GIF animation</p>
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->gif_url = $data['gif_url'];
        if (isset($data['gif_width'])){
            $this->gif_width = $data['gif_width'];
        }

        if (isset($data['gif_height'])){
            $this->gif_height = $data['gif_height'];
        }

        if (isset($data['gif_duration'])){
            $this->gif_duration = $data['gif_duration'];
        }

        $this->thumbnail_url = $data['thumbnail_url'];
        if (isset($data['thumbnail_mime_type'])){
            $this->thumbnail_mime_type = $data['thumbnail_mime_type'];
        }

        if (isset($data['title'])){
            $this->title = $data['title'];
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