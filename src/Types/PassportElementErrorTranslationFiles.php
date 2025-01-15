<?php

namespace Milly\Laragram\Types;

/**
* PassportElementErrorTranslationFiles
 *
 *<p>Error message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrortranslationfiles
 */
class PassportElementErrorTranslationFiles
{
    /**
    * <p>Error source, must be *translation\_files*</p>
    * @var string
    */
    public string $source;

    /**
    * <p>Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver\<em>license”, “identity\</em>card”, “internal\<em>passport”, “utility\</em>bill”, “bank\<em>statement”, “rental\</em>agreement”, “passport\<em>registration”, “temporary\</em>registration”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>List of base64-encoded file hashes</p>
    * @var array
    */
    public array $file_hashes;

    /**
    * <p>Error message</p>
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