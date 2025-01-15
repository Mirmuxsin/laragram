<?php

namespace Milly\Laragram\Types;

/**
* PassportElementErrorFrontSide
 *
 *<p>Error message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorfrontside
 */
class PassportElementErrorFrontSide
{
    /**
    * <p>Error source, must be *front\_side*</p>
    * @var string
    */
    public string $source;

    /**
    * <p>The section of the user's Telegram Passport which has the issue, one of “passport”, “driver\<em>license”, “identity\</em>card”, “internal\_passport”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Base64-encoded hash of the file with the front side of the document</p>
    * @var string
    */
    public string $file_hash;

    /**
    * <p>Error message</p>
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