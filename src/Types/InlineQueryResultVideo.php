<?php

namespace Milly\Laragram\Types;


/**
* InlineQueryResultVideo
 *
 *<p>*Optional*. Content of the message to be sent instead of the video. This field is <strong>required</strong> if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultvideo
 */
class InlineQueryResultVideo
{
    /**
    * <p>Type of the result, must be *video*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for this result, 1-64 bytes</p>
    * @var string
    */
    public string $id;

    /**
    * <p>A valid URL for the embedded video player or video file</p>
    * @var string
    */
    public string $video_url;

    /**
    * <p>MIME type of the content of the video URL, “text/html” or “video/mp4”</p>
    * @var string
    */
    public string $mime_type;

    /**
    * <p>URL of the thumbnail (JPEG only) for the video</p>
    * @var string
    */
    public string $thumbnail_url;

    /**
    * <p>Title for the result</p>
    * @var string
    */
    public string $title;

    /**
    * <p>*Optional*. Caption of the video to be sent, 0-1024 characters after entities parsing</p>
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * <p>*Optional*. Mode for parsing entities in the video caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
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
    * <p>*Optional*. Video width</p>
    * @var int|null
    */
    public ?int $video_width = null;

    /**
    * <p>*Optional*. Video height</p>
    * @var int|null
    */
    public ?int $video_height = null;

    /**
    * <p>*Optional*. Video duration in seconds</p>
    * @var int|null
    */
    public ?int $video_duration = null;

    /**
    * <p>*Optional*. Short description of the result</p>
    * @var string|null
    */
    public ?string $description = null;

    /**
    * <p>*Optional*. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message</p>
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * <p>*Optional*. Content of the message to be sent instead of the video. This field is <strong>required</strong> if InlineQueryResultVideo is used to send an HTML-page as a result (e.g., a YouTube video).</p>
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->video_url = $data['video_url'];
        $this->mime_type = $data['mime_type'];
        $this->thumbnail_url = $data['thumbnail_url'];
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

        if (isset($data['show_caption_above_media'])){
            $this->show_caption_above_media = $data['show_caption_above_media'];
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