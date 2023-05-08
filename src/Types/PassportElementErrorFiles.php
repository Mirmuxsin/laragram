<?php

namespace Milly\Laragram\Types;


/**
* PassportElementErrorFiles
 *
 *Represents an issue with a list of scans. The error is considered resolved when the list of files containing the scans changes.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorfiles
 */
class PassportElementErrorFiles
{
    /**
    * Error source, must be *files*
    * @var string
    */
    public string $source;

    /**
    * The section of the user's Telegram Passport which has the issue, one of “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”
    * @var string
    */
    public string $type;

    /**
    * List of base64-encoded file hashes
    * @var array
    */
    public array $file_hashes;

    /**
    * Error message
    * @var string
    */
    public string $message;



    public function __construct($data)
    {
        $this->source = $data['source'];
        $this->type = $data['type'];
        $this->file_hashes = $data['file_hashes'];
        $this->message = $data['message'];
    }
}