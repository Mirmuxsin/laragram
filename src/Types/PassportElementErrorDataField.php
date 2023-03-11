<?php

namespace Milly\Laragram\Types;


/**
* PassportElementErrorDataField
 *
 *Represents an issue in one of the data fields that was provided by the user. The error is considered resolved when the field's value changes.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#passportelementerrordatafield
 */
class PassportElementErrorDataField
{
    /**
    * Error source, must be *data*
    * @var string
    */
    public string $source;

    /**
    * The section of the user's Telegram Passport which has the error, one of “personal\_details”, “passport”, “driver\_license”, “identity\_card”, “internal\_passport”, “address”
    * @var string
    */
    public string $type;

    /**
    * Name of the data field which has the error
    * @var string
    */
    public string $field_name;

    /**
    * Base64-encoded data hash
    * @var string
    */
    public string $data_hash;

    /**
    * Error message
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