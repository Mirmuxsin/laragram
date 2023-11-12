<?php

namespace Milly\Laragram\Types;


/**
* PassportElementErrorFiles
 *
 *<p>Error message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorfiles
 */
class PassportElementErrorFiles
{
    /**
    * <p>Error source, must be *files*</p>
    * @var string
    */
    public string $source;

    /**
    * <p>The section of the user's Telegram Passport which has the issue, one of “utility\<em>bill”, “bank\</em>statement”, “rental\<em>agreement”, “passport\</em>registration”, “temporary\_registration”</p>
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