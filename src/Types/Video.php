<?php

namespace Milly\Laragram\Types;


/**
* Video
 *
 *<p>*Optional*. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#video
 */
class Video
{
    /**
    * <p>Identifier for this file, which can be used to download or reuse the file</p>
    * @var string
    */
    public string $file_id;

    /**
    * <p>Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.</p>
    * @var string
    */
    public string $file_unique_id;

    /**
    * <p>Video width as defined by sender</p>
    * @var int
    */
    public int $width;

    /**
    * <p>Video height as defined by sender</p>
    * @var int
    */
    public int $height;

    /**
    * <p>Duration of the video in seconds as defined by sender</p>
    * @var int
    */
    public int $duration;

    /**
    * <p>*Optional*. Video thumbnail</p>
    * @var PhotoSize|null
    */
    public ?PhotoSize $thumbnail = null;

    /**
    * <p>*Optional*. Original filename as defined by sender</p>
    * @var string|null
    */
    public ?string $file_name = null;

    /**
    * <p>*Optional*. MIME type of the file as defined by sender</p>
    * @var string|null
    */
    public ?string $mime_type = null;

    /**
    * <p>*Optional*. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.</p>
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
        if (isset($data['thumbnail'])){
            $this->thumbnail = new PhotoSize($data['thumbnail']);
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