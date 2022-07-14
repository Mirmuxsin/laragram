<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InlineQueryResultMpeg4Gif
 *
 *Represents a link to a video animation (H.264/MPEG-4 AVC video without sound). By default, this animated MPEG-4 file will be sent by the user with optional caption. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the animation.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultmpeg4gif
 */
class InlineQueryResultMpeg4Gif extends Laragram
{
    /**
    * Type of the result, must be *mpeg4\_gif*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for this result, 1-64 bytes
    * @var string
    */
    public string $id;

    /**
    * A valid URL for the MPEG4 file. File size must not exceed 1MB
    * @var string
    */
    public string $mpeg4_url;

    /**
    * *Optional*. Video width
    * @var int|null
    */
    public ?int $mpeg4_width = null;

    /**
    * *Optional*. Video height
    * @var int|null
    */
    public ?int $mpeg4_height = null;

    /**
    * *Optional*. Video duration in seconds
    * @var int|null
    */
    public ?int $mpeg4_duration = null;

    /**
    * URL of the static (JPEG or GIF) or animated (MPEG4) thumbnail for the result
    * @var string
    */
    public string $thumb_url;

    /**
    * *Optional*. MIME type of the thumbnail, must be one of “image/jpeg”, “image/gif”, or “video/mp4”. Defaults to “image/jpeg”
    * @var string|null
    */
    public ?string $thumb_mime_type = null;

    /**
    * *Optional*. Title for the result
    * @var string|null
    */
    public ?string $title = null;

    /**
    * *Optional*. Caption of the MPEG-4 file to be sent, 0-1024 characters after entities parsing
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * *Optional*. Mode for parsing entities in the caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * *Optional*. [Inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * *Optional*. Content of the message to be sent instead of the video animation
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->mpeg4_url = $data['mpeg4_url'];
        if (isset($data['mpeg4_width'])){
            $this->mpeg4_width = $data['mpeg4_width'];
        }

        if (isset($data['mpeg4_height'])){
            $this->mpeg4_height = $data['mpeg4_height'];
        }

        if (isset($data['mpeg4_duration'])){
            $this->mpeg4_duration = $data['mpeg4_duration'];
        }

        $this->thumb_url = $data['thumb_url'];
        if (isset($data['thumb_mime_type'])){
            $this->thumb_mime_type = $data['thumb_mime_type'];
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