<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* PassportFile
 *
 *This object represents a file uploaded to Telegram Passport. Currently all Telegram Passport files are in JPEG format when decrypted and don't exceed 10MB.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportfile
 */
class PassportFile extends Laragram
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
    * File size in bytes
    * @var int
    */
    public int $file_size;

    /**
    * Unix time when the file was uploaded
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