<?php

namespace Milly\Laragram\Types;


/**
* InputMediaAnimation
 *
 *Represents an animation file (GIF or H.264/MPEG-4 AVC video without sound) to be sent.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputmediaanimation
 */
class InputMediaAnimation
{
    /**
    * Type of the result, must be *animation*
    * @var string
    */
    public string $type;

    /**
    * File to send. Pass a file\_id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://\<file\_attach\_name\>” to upload a new one using multipart/form-data under \<file\_attach\_name\> name. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
    * @var string
    */
    public string $media;

    /**
    * *Optional*. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\_attach\_name\>” if the thumbnail was uploaded using multipart/form-data under \<file\_attach\_name\>. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
    * @var any_of|null
    */
    public ?any_of $thumbnail = null;

    /**
    * *Optional*. Caption of the animation to be sent, 0-1024 characters after entities parsing
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * *Optional*. Mode for parsing entities in the animation caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * *Optional*. Animation width
    * @var int|null
    */
    public ?int $width = null;

    /**
    * *Optional*. Animation height
    * @var int|null
    */
    public ?int $height = null;

    /**
    * *Optional*. Animation duration in seconds
    * @var int|null
    */
    public ?int $duration = null;

    /**
    * *Optional*. Pass *True* if the animation needs to be covered with a spoiler animation
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

        if (isset($data['width'])){
            $this->width = $data['width'];
        }

        if (isset($data['height'])){
            $this->height = $data['height'];
        }

        if (isset($data['duration'])){
            $this->duration = $data['duration'];
        }

        if (isset($data['has_spoiler'])){
            $this->has_spoiler = $data['has_spoiler'];
        }

    }
}