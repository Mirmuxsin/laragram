<?php

namespace Milly\Laragram\Types;


/**
* SharedUser
 *
 *<p>*Optional*. Available sizes of the chat photo, if the photo was requested by the bot</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#shareduser
 */
class SharedUser
{
    /**
    * <p>Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so 64-bit integers or double-precision float types are safe for storing these identifiers. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.</p>
    * @var int
    */
    public int $user_id;

    /**
    * <p>*Optional*. First name of the user, if the name was requested by the bot</p>
    * @var string|null
    */
    public ?string $first_name = null;

    /**
    * <p>*Optional*. Last name of the user, if the name was requested by the bot</p>
    * @var string|null
    */
    public ?string $last_name = null;

    /**
    * <p>*Optional*. Username of the user, if the username was requested by the bot</p>
    * @var string|null
    */
    public ?string $username = null;

    /**
    * <p>*Optional*. Available sizes of the chat photo, if the photo was requested by the bot</p>
    * @var array|null
    */
    public ?array $photo = null;



    public function __construct($data)
    {
        $this->user_id = $data['user_id'];
        if (isset($data['first_name'])){
            $this->first_name = $data['first_name'];
        }

        if (isset($data['last_name'])){
            $this->last_name = $data['last_name'];
        }

        if (isset($data['username'])){
            $this->username = $data['username'];
        }

        if (isset($data['photo'])){
            $this->photo = $data['photo'];
        }

    }
}