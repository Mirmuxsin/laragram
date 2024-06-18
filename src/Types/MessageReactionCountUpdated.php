<?php

namespace Milly\Laragram\Types;


/**
* MessageReactionCountUpdated
 *
 *<p>List of reactions that are present on the message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messagereactioncountupdated
 */
class MessageReactionCountUpdated
{
    /**
    * <p>The chat containing the message</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>Unique message identifier inside the chat</p>
    * @var int
    */
    public int $message_id;

    /**
    * <p>Date of the change in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>List of reactions that are present on the message</p>
    * @var array
    */
    public array $reactions;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['message_reaction_count_updated'];
        $this->chat = new Chat($data['chat']);

        $this->message_id = $data['message_id'];
        $this->date = $data['date'];
        $this->reactions = $data['reactions'];
    }
}