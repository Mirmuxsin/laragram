<?php

namespace Milly\Laragram\Types;

/**
* MessageOrigin
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageorigin
 */
class MessageOrigin
{


    public MessageOriginUser $messageOriginUser;

    public MessageOriginHiddenUser $messageOriginHiddenUser;

    public MessageOriginChat $messageOriginChat;

    public MessageOriginChannel $messageOriginChannel;



    public function __construct($data)
    {
        $this->messageOriginUser = new MessageOriginUser($data);
        $this->messageOriginHiddenUser = new MessageOriginHiddenUser($data);
        $this->messageOriginChat = new MessageOriginChat($data);
        $this->messageOriginChannel = new MessageOriginChannel($data);
    }
}