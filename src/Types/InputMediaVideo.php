<?php

namespace Milly\Laragram\Types;


/**
* InputMediaVideo
 *
 *<p>*Optional*. Pass *True* if the video needs to be covered with a spoiler animation</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputmediavideo
 */
class InputMediaVideo
{
    /**
    * <p>Type of the result, must be *video*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>File to send. Pass a file\<em>id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://\<file\</em>attach\<em>name\>” to upload a new one using multipart/form-data under \<file\</em>attach\_name\> name. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
    * @var string
    */
    public string $media;

    /**
    * <p>*Optional*. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\<em>attach\</em>name\>” if the thumbnail was uploaded using multipart/form-data under \<file\<em>attach\</em>name\>. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
    * @var any_of|null
    */
    public ?any_of $thumbnail = null;

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
    public ?int $width = null;

    /**
    * <p>*Optional*. Video height</p>
    * @var int|null
    */
    public ?int $height = null;

    /**
    * <p>*Optional*. Video duration in seconds</p>
    * @var int|null
    */
    public ?int $duration = null;

    /**
    * <p>*Optional*. Pass *True* if the uploaded video is suitable for streaming</p>
    * @var bool|null
    */
    public ?bool $supports_streaming = null;

    /**
    * <p>*Optional*. Pass *True* if the video needs to be covered with a spoiler animation</p>
    * @var bool|null
    */
    public ?bool $has_spoiler = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->media = $data['media'];
        if (isset($data['thumbnail'])){
            $this->thumbnail = $data['thumbnail'];
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

        if (isset($data['width'])){
            $this->width = $data['width'];
        }

        if (isset($data['height'])){
            $this->height = $data['height'];
        }

        if (isset($data['duration'])){
            $this->duration = $data['duration'];
        }

        if (isset($data['supports_streaming'])){
            $this->supports_streaming = $data['supports_streaming'];
        }

        if (isset($data['has_spoiler'])){
            $this->has_spoiler = $data['has_spoiler'];
        }

    }
}