<?php

namespace Milly\Laragram\Types;


/**
* MessageOriginChat
 *
 *<p>*Optional*. For messages originally sent by an anonymous chat administrator, original message author signature</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageoriginchat
 */
class MessageOriginChat
{
    /**
    * <p>Type of the message origin, always “chat”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Date the message was sent originally in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>Chat that sent the message originally</p>
    * @var Chat
    */
    public Chat $sender_chat;

    /**
    * <p>*Optional*. For messages originally sent by an anonymous chat administrator, original message author signature</p>
    * @var string|null
    */
    public ?string $author_signature = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->date = $data['date'];
        $this->sender_chat = new Chat($data['sender_chat']);

        if (isset($data['author_signature'])){
            $this->author_signature = $data['author_signature'];
        }

    }
}