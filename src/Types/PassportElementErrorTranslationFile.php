<?php

namespace Milly\Laragram\Types;


/**
* PassportElementErrorTranslationFile
 *
 *<p>Error message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrortranslationfile
 */
class PassportElementErrorTranslationFile
{
    /**
    * <p>Error source, must be *translation\_file*</p>
    * @var string
    */
    public string $source;

    /**
    * <p>Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver\<em>license”, “identity\</em>card”, “internal\<em>passport”, “utility\</em>bill”, “bank\<em>statement”, “rental\</em>agreement”, “passport\<em>registration”, “temporary\</em>registration”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Base64-encoded file hash</p>
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