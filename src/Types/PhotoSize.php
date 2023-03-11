<?php

namespace Milly\Laragram\Types;


/**
* PhotoSize
 *
 *This object represents one size of a photo or a [file](https://core.telegram.org/bots/api/#document) / [sticker](https://core.telegram.org/bots/api/#sticker) thumbnail.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#photosize
 */
class PhotoSize
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
    * Photo width
    * @var int
    */
    public int $width;

    /**
    * Photo height
    * @var int
    */
    public int $height;

    /**
    * *Optional*. File size in bytes
    * @var int|null
    */
    public ?int $file_size = null;



    public function __construct($data)
    {
        $this->file_id = $data['file_id'];
        $this->file_unique_id = $data['file_unique_id'];
        $this->width = $data['width'];
        $this->height = $data['height'];
        if (isset($data['file_size'])){
            $this->file_size = $data['file_size'];
        }

    }
}