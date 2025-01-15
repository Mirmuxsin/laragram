<?php

namespace Milly\Laragram\Types;

/**
* InputPaidMediaVideo
 *
 *<p>*Optional*. Pass *True* if the uploaded video is suitable for streaming</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputpaidmediavideo
 */
class InputPaidMediaVideo
{
    /**
    * <p>Type of the media, must be *video*</p>
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



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->media = $data['media'];
        if (isset($data['thumbnail'])){
            $this->thumbnail = $data['thumbnail'];
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

    }
}