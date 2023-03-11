<?php

namespace Milly\Laragram\Types;


/**
* InputContactMessageContent
 *
 *Represents the [content](https://core.telegram.org/bots/api/#inputmessagecontent) of a contact message to be sent as the result of an inline query.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputcontactmessagecontent
 */
class InputContactMessageContent
{
    /**
    * Contact's phone number
    * @var string
    */
    public string $phone_number;

    /**
    * Contact's first name
    * @var string
    */
    public string $first_name;

    /**
    * *Optional*. Contact's last name
    * @var string|null
    */
    public ?string $last_name = null;

    /**
    * *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
    * @var string|null
    */
    public ?string $vcard = null;



    public function __construct($data)
    {
        $this->phone_number = $data['phone_number'];
        $this->first_name = $data['first_name'];
        if (isset($data['last_name'])){
            $this->last_name = $data['last_name'];
        }

        if (isset($data['vcard'])){
            $this->vcard = $data['vcard'];
        }

    }
}