<?php

namespace Milly\Laragram\Types;


/**
* PassportElementErrorUnspecified
 *
 *Represents an issue in an unspecified place. The error is considered resolved when new data is added.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorunspecified
 */
class PassportElementErrorUnspecified
{
    /**
    * Error source, must be *unspecified*
    * @var string
    */
    public string $source;

    /**
    * Type of element of the user's Telegram Passport which has the issue
    * @var string
    */
    public string $type;

    /**
    * Base64-encoded element hash
    * @var string
    */
    public string $element_hash;

    /**
    * Error message
    * @var string
    */
    public string $message;



    public function __construct($data)
    {
        $this->source = $data['source'];
        $this->type = $data['type'];
        $this->element_hash = $data['element_hash'];
        $this->message = $data['message'];
    }
}