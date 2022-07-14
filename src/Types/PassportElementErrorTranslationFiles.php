<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* PassportElementErrorTranslationFiles
 *
 *Represents an issue with the translated version of a document. The error is considered resolved when a file with the document translation change.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrortranslationfiles
 */
class PassportElementErrorTranslationFiles extends Laragram
{
    /**
    * Error source, must be *translation\_files*
    * @var string
    */
    public string $source;

    /**
    * Type of element of the user's Telegram Passport which has the issue, one of “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “utility\_bill”, “bank\_statement”, “rental\_agreement”, “passport\_registration”, “temporary\_registration”
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