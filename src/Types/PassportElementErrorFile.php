<?php

namespace Milly\Laragram\Types;


/**
* PassportElementErrorFile
 *
 *<p>Error message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrorfile
 */
class PassportElementErrorFile
{
    /**
    * <p>Error source, must be *file*</p>
    * @var string
    */
    public string $source;

    /**
    * <p>The section of the user's Telegram Passport which has the issue, one of “utility\<em>bill”, “bank\</em>statement”, “rental\<em>agreement”, “passport\</em>registration”, “temporary\_registration”</p>
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