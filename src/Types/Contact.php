<?php

namespace Milly\Laragram\Types;


/**
* Contact
 *
 *<p>*Optional*. Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#contact
 */
class Contact
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
    * <p>*Optional*. Contact's user identifier in Telegram. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.</p>
    * @var int|null
    */
    public ?int $user_id = null;

    /**
    * <p>*Optional*. Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a></p>
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