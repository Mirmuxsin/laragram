<?php

namespace Milly\Laragram\Types;


/**
* PassportElementErrorTranslationFile
 *
 *Represents an issue with one of the files that constitute the translation of a document. The error is considered resolved when the file changes.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrortranslationfile
 */
class PassportElementErrorTranslationFile
{
    /**
    * Error source, must be *translation\_file*
    * @var string
    */
    public string $source;

    /**
    * Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”
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