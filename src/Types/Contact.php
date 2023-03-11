<?php

namespace Milly\Laragram\Types;


/**
* Contact
 *
 *This object represents a phone contact.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#contact
 */
class Contact
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
    * *Optional*. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
    * @var int|null
    */
    public ?int $user_id = null;

    /**
    * *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard)
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

        if (isset($data['user_id'])){
            $this->user_id = $data['user_id'];
        }

        if (isset($data['vcard'])){
            $this->vcard = $data['vcard'];
        }

    }
}