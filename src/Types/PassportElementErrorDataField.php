<?php

namespace Milly\Laragram\Types;

/**
* PassportElementErrorDataField
 *
 *<p>Error message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrordatafield
 */
class PassportElementErrorDataField
{
    /**
    * <p>Error source, must be *data*</p>
    * @var string
    */
    public string $source;

    /**
    * <p>The section of the user's Telegram Passport which has the error, one of “personal\<em>details”, “passport”, “driver\</em>license”, “identity\<em>card”, “internal\</em>passport”, “address”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Name of the data field which has the error</p>
    * @var string
    */
    public string $field_name;

    /**
    * <p>Base64-encoded data hash</p>
    * @var string
    */
    public string $data_hash;

    /**
    * <p>Error message</p>
    * @var string
    */
    public string $message;



    public function __construct($data)
    {
        $this->source = $data['source'];
        $this->type = $data['type'];
        $this->field_name = $data['field_name'];
        $this->data_hash = $data['data_hash'];
        $this->message = $data['message'];
    }
}