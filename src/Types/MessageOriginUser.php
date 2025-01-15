<?php

namespace Milly\Laragram\Types;

/**
* MessageOriginUser
 *
 *<p>User that sent the message originally</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageoriginuser
 */
class MessageOriginUser
{
    /**
    * <p>Type of the message origin, always “user”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Date the message was sent originally in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>User that sent the message originally</p>
    * @var User
    */
    public User $sender_user;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->date = $data['date'];
        $this->sender_user = new User($data['sender_user']);

    }
}