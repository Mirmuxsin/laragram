<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* Video
 *
 *This object represents a video file.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#video
 */
class Video extends Laragram
{
    /**
    * Identifier for this file, which can be used to download or reuse the file
    * @var string
    */
    public string $file_id;

    /**
    * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
    * @var string
    */
    public string $file_unique_id;

    /**
    * Video width as defined by sender
    * @var int
    */
    public int $width;

    /**
    * Video height as defined by sender
    * @var int
    */
    public int $height;

    /**
    * Duration of the video in seconds as defined by sender
    * @var int
    */
    public int $duration;

    /**
    * *Optional*. Video thumbnail
    * @var PhotoSize|null
    */
    public ?PhotoSize $thumb = null;

    /**
    * *Optional*. Original filename as defined by sender
    * @var string|null
    */
    public ?string $file_name = null;

    /**
    * *Optional*. MIME type of the file as defined by sender
    * @var string|null
    */
    public ?string $mime_type = null;

    /**
    * *Optional*. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
    * @var int|null
    */
    public ?int $file_size = null;



    public function __construct($data)
    {
        $this->file_id = $data['file_id'];
        $this->file_unique_id = $data['file_unique_id'];
        $this->width = $data['width'];
        $this->height = $data['height'];
        $this->duration = $data['duration'];
        if (isset($data['thumb'])){
            $this->thumb = new PhotoSize($data['thumb']);
        }

        if (isset($data['file_name'])){
            $this->file_name = $data['file_name'];
        }

        if (isset($data['mime_type'])){
            $this->mime_type = $data['mime_type'];
        }

        if (isset($data['file_size'])){
            $this->file_size = $data['file_size'];
        }

    }
}