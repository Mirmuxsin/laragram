<?php

namespace Milly\Laragram\Types;

/**
* Story
 *
 *<p>Unique identifier for the story in the chat</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#story
 */
class Story
{
    /**
    * <p>Chat that posted the story</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>Unique identifier for the story in the chat</p>
    * @var int
    */
    public int $id;



    public function __construct($data)
    {
        $this->chat = new Chat($data['chat']);

        $this->id = $data['id'];
    }
}