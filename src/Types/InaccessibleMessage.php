<?php

namespace Milly\Laragram\Types;

/**
* InaccessibleMessage
 *
 *<p>Always 0. The field can be used to differentiate regular and inaccessible messages.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inaccessiblemessage
 */
class InaccessibleMessage
{
    /**
    * <p>Chat the message belonged to</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>Unique message identifier inside the chat</p>
    * @var int
    */
    public int $message_id;

    /**
    * <p>Always 0. The field can be used to differentiate regular and inaccessible messages.</p>
    * @var int
    */
    public int $date;



    public function __construct($data)
    {
        $this->chat = new Chat($data['chat']);

        $this->message_id = $data['message_id'];
        $this->date = $data['date'];
    }
}