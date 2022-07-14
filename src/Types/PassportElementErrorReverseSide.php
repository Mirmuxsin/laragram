<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* PassportElementErrorReverseSide
 *
 *Represents an issue with the reverse side of a document. The error is considered resolved when the file with reverse side of the document changes.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorreverseside
 */
class PassportElementErrorReverseSide extends Laragram
{
    /**
    * Error source, must be *reverse\_side*
    * @var string
    */
    public string $source;

    /**
    * The section of the user's Telegram Passport which has the issue, one of “driver\_license”, “identity\_card”
    * @var string
    */
    public string $type;

    /**
    * Base64-encoded hash of the file with the reverse side of the document
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