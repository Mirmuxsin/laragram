<?php

namespace Milly\Laragram\Types;


/**
* PassportElementErrorSelfie
 *
 *Represents an issue with the selfie with a document. The error is considered resolved when the file with the selfie changes.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorselfie
 */
class PassportElementErrorSelfie
{
    /**
    * Error source, must be *selfie*
    * @var string
    */
    public string $source;

    /**
    * The section of the user's Telegram Passport which has the issue, one of “passport”, “driver\_license”, “identity\_card”, “internal\_passport”
    * @var string
    */
    public string $type;

    /**
    * Base64-encoded hash of the file with the selfie
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