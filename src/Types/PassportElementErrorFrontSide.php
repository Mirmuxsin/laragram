<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* PassportElementErrorFrontSide
 *
 *Represents an issue with the front side of a document. The error is considered resolved when the file with the front side of the document changes.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorfrontside
 */
class PassportElementErrorFrontSide extends Laragram
{
    /**
    * Error source, must be *front\_side*
    * @var string
    */
    public string $source;

    /**
    * The section of the user's Telegram Passport which has the issue, one of “passport”, “driver\_license”, “identity\_card”, “internal\_passport”
    * @var string
    */
    public string $type;

    /**
    * Base64-encoded hash of the file with the front side of the document
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