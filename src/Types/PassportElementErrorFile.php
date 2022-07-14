<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* PassportElementErrorFile
 *
 *Represents an issue with a document scan. The error is considered resolved when the file with the document scan changes.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorfile
 */
class PassportElementErrorFile extends Laragram
{
    /**
    * Error source, must be *file*
    * @var string
    */
    public string $source;

    /**
    * The section of the user's Telegram Passport which has the issue, one of “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”
    * @var string
    */
    public string $type;

    /**
    * Base64-encoded file hash
    * @var string
    */
    public string $file_hash;

    /**
    * Error message
    * @var string
    */
    public string $message;



    public function __construct($data)
    {
        $this->source = $data['source'];
        $this->type = $data['type'];
        $this->file_hash = $data['file_hash'];
        $this->message = $data['message'];
    }
}