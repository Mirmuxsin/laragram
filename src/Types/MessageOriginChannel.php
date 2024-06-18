<?php

namespace Milly\Laragram\Types;


/**
* MessageOriginChannel
 *
 *<p>*Optional*. Signature of the original post author</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageoriginchannel
 */
class MessageOriginChannel
{
    /**
    * <p>Type of the message origin, always “channel”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Date the message was sent originally in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>Channel chat to which the message was originally sent</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>Unique message identifier inside the chat</p>
    * @var int
    */
    public int $message_id;

    /**
    * <p>*Optional*. Signature of the original post author</p>
    * @var string|null
    */
    public ?string $author_signature = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->date = $data['date'];
        $this->chat = new Chat($data['chat']);

        $this->message_id = $data['message_id'];
        if (isset($data['author_signature'])){
            $this->author_signature = $data['author_signature'];
        }

    }
}