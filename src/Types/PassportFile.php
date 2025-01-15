<?php

namespace Milly\Laragram\Types;

/**
* PassportFile
 *
 *<p>Unix time when the file was uploaded</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportfile
 */
class PassportFile
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
    * <p>File size in bytes</p>
    * @var int
    */
    public int $file_size;

    /**
    * <p>Unix time when the file was uploaded</p>
    * @var int
    */
    public int $file_date;



    public function __construct($data)
    {
        $this->file_id = $data['file_id'];
        $this->file_unique_id = $data['file_unique_id'];
        $this->file_size = $data['file_size'];
        $this->file_date = $data['file_date'];
    }
}