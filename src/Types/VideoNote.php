<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* VideoNote
 *
 *This object represents a [video message](https://telegram.org/blog/video-messages-and-telescope) (available in Telegram apps as of [v.4.0](https://telegram.org/blog/video-messages-and-telescope)).
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#videonote
 */
class VideoNote extends Laragram
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
    * Video width and height (diameter of the video message) as defined by sender
    * @var int
    */
    public int $length;

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
    * *Optional*. File size in bytes
    * @var int|null
    */
    public ?int $file_size = null;



    public function __construct($data)
    {
        $this->file_id = $data['file_id'];
        $this->file_unique_id = $data['file_unique_id'];
        $this->length = $data['length'];
        $this->duration = $data['duration'];
        if (isset($data['thumb'])){
            $this->thumb = new PhotoSize($data['thumb']);
        }

        if (isset($data['file_size'])){
            $this->file_size = $data['file_size'];
        }

    }
}