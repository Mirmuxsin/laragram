<?php

namespace Milly\Laragram\Types;


/**
* MessageOriginHiddenUser
 *
 *<p>Name of the user that sent the message originally</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageoriginhiddenuser
 */
class MessageOriginHiddenUser
{
    /**
    * <p>Type of the message origin, always “hidden\_user”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Date the message was sent originally in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>Name of the user that sent the message originally</p>
    * @var string
    */
    public string $sender_user_name;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->date = $data['date'];
        $this->sender_user_name = $data['sender_user_name'];
    }
}