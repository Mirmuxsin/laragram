<?php

namespace Milly\Laragram\Types;

/**
* PassportElementErrorUnspecified
 *
 *<p>Error message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorunspecified
 */
class PassportElementErrorUnspecified
{
    /**
    * <p>Error source, must be *unspecified*</p>
    * @var string
    */
    public string $source;

    /**
    * <p>Type of element of the user's Telegram Passport which has the issue</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Base64-encoded element hash</p>
    * @var string
    */
    public string $element_hash;

    /**
    * <p>Error message</p>
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