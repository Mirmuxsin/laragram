<?php

namespace Milly\Laragram\Types;

/**
* ChatBoostUpdated
 *
 *<p>Information about the chat boost</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatboostupdated
 */
class ChatBoostUpdated
{
    /**
    * <p>Chat which was boosted</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>Information about the chat boost</p>
    * @var ChatBoost
    */
    public ChatBoost $boost;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['chat_boost_updated'];
        $this->chat = new Chat($data['chat']);

        $this->boost = new ChatBoost($data['boost']);

    }
}