<?php

namespace Milly\Laragram\Types;

/**
* VideoNote
 *
 *<p>*Optional*. File size in bytes</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#videonote
 */
class VideoNote
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
    * <p>Video width and height (diameter of the video message) as defined by the sender</p>
    * @var int
    */
    public int $length;

    /**
    * <p>Duration of the video in seconds as defined by the sender</p>
    * @var int
    */
    public int $duration;

    /**
    * <p>*Optional*. Video thumbnail</p>
    * @var PhotoSize|null
    */
    public ?PhotoSize $thumbnail = null;

    /**
    * <p>*Optional*. File size in bytes</p>
    * @var int|null
    */
    public ?int $file_size = null;



    public function __construct($data)
    {
        $this->file_id = $data['file_id'];
        $this->file_unique_id = $data['file_unique_id'];
        $this->length = $data['length'];
        $this->duration = $data['duration'];
        if (isset($data['thumbnail'])){
            $this->thumbnail = new PhotoSize($data['thumbnail']);
        }

        if (isset($data['file_size'])){
            $this->file_size = $data['file_size'];
        }

    }
}