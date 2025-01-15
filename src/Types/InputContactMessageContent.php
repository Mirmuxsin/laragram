<?php

namespace Milly\Laragram\Types;

/**
* InputContactMessageContent
 *
 *<p>*Optional*. Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a>, 0-2048 bytes</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputcontactmessagecontent
 */
class InputContactMessageContent
{
    /**
    * <p>Contact's phone number</p>
    * @var string
    */
    public string $phone_number;

    /**
    * <p>Contact's first name</p>
    * @var string
    */
    public string $first_name;

    /**
    * <p>*Optional*. Contact's last name</p>
    * @var string|null
    */
    public ?string $last_name = null;

    /**
    * <p>*Optional*. Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a>, 0-2048 bytes</p>
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