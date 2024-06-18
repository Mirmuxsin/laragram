<?php

namespace Milly\Laragram\Types;


/**
* ChatBoostRemoved
 *
 *<p>Source of the removed boost</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatboostremoved
 */
class ChatBoostRemoved
{
    /**
    * <p>Chat which was boosted</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>Unique identifier of the boost</p>
    * @var string
    */
    public string $boost_id;

    /**
    * <p>Point in time (Unix timestamp) when the boost was removed</p>
    * @var int
    */
    public int $remove_date;

    /**
    * <p>Source of the removed boost</p>
    * @var ChatBoostSource
    */
    public ChatBoostSource $source;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['chat_boost_removed'];
        $this->chat = new Chat($data['chat']);

        $this->boost_id = $data['boost_id'];
        $this->remove_date = $data['remove_date'];
        $this->source = new ChatBoostSource($data['source']);

    }
}