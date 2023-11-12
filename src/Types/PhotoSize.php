<?php

namespace Milly\Laragram\Types;


/**
* PhotoSize
 *
 *<p>*Optional*. File size in bytes</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#photosize
 */
class PhotoSize
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
    * <p>Photo width</p>
    * @var int
    */
    public int $width;

    /**
    * <p>Photo height</p>
    * @var int
    */
    public int $height;

    /**
    * <p>*Optional*. File size in bytes</p>
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