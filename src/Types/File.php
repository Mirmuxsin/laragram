<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* File
 *
 *This object represents a file ready to be downloaded. The file can be downloaded via the link `https://api.telegram.org/file/bot<token>/<file_path>`. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling [getFile](https://core.telegram.org/bots/api/#getfile).

The maximum file size to download is 20 MB
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#file
 */
class File extends Laragram
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
    * *Optional*. File size in bytes. It can be bigger than 2^31 and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this value.
    * @var int|null
    */
    public ?int $file_size = null;

    /**
    * *Optional*. File path. Use `https://api.telegram.org/file/bot<token>/<file_path>` to get the file.
    * @var string|null
    */
    public ?string $file_path = null;



    public function __construct($data)
    {
        $this->file_id = $data['file_id'];
        $this->file_unique_id = $data['file_unique_id'];
        if (isset($data['file_size'])){
            $this->file_size = $data['file_size'];
        }

        if (isset($data['file_path'])){
            $this->file_path = $data['file_path'];
        }

    }
}