<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InlineQueryResultVideo
 *
 *Represents a link to a page containing an embedded video player or a video file. By default, this video file will be sent by the user with an optional caption. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the video.

If an InlineQueryResultVideo message contains an embedded video (e.g., YouTube), you **must** replace its content using *input\_message\_content*.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultvideo
 */
class InlineQueryResultVideo extends Laragram
{
    /**
    * Type of the result, must be *video*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for this result, 1-64 bytes
    * @var string
    */
    public string $id;

    /**
    * A valid URL for the embedded video player or video file
    * @var string
    */
    public string $video_url;

    /**
    * MIME type of the content of the video URL, “text/html” or “video/mp4”
    * @var string
    */
    public string $mime_type;

    /**
    * URL of the thumbnail (JPEG only) for the video
    * @var string
    */
    public string $thumb_url;

    /**
    * Title for the result
    * @var string
    */
    public string $title;

    /**
    * *Optional*. Caption of the video to be sent, 0-1024 characters after entities parsing
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * *Optional*. Mode for parsing entities in the video caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * *Optional*. Video width
    * @var int|null
    */
    public ?int $video_width = null;

    /**
    * *Optional*. Video height
    * @var int|null
    */
    public ?int $video_height = null;

    /**
    * *Optional*. Video duration in seconds
    * @var int|null
    */
    public ?int $video_duration = null;

    /**
    * *Optional*. Short description of the result
    * @var string|null
    */
    public ?string $description = null;

    /**
    * *Optional*. [Inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * *Optional*. Content of the message to be sent instead of the video. This field is **required** if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->video_url = $data['video_url'];
        $this->mime_type = $data['mime_type'];
        $this->thumb_url = $data['thumb_url'];
        $this->title = $data['title'];
        if (isset($data['caption'])){
            $this->caption = $data['caption'];
        }

        if (isset($data['parse_mode'])){
            $this->parse_mode = $data['parse_mode'];
        }

        if (isset($data['caption_entities'])){
            $this->caption_entities = $data['caption_entities'];
        }

        if (isset($data['video_width'])){
            $this->video_width = $data['video_width'];
        }

        if (isset($data['video_height'])){
            $this->video_height = $data['video_height'];
        }

        if (isset($data['video_duration'])){
            $this->video_duration = $data['video_duration'];
        }

        if (isset($data['description'])){
            $this->description = $data['description'];
        }

        if (isset($data['reply_markup'])){
            $this->reply_markup = new InlineKeyboardMarkup($data['reply_markup']);
        }

        if (isset($data['input_message_content'])){
            $this->input_message_content = new InputMessageContent($data['input_message_content']);
        }

    }
}