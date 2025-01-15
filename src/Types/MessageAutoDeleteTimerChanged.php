<?php

namespace Milly\Laragram\Types;

/**
* MessageAutoDeleteTimerChanged
 *
 *<p>New auto-delete time for messages in the chat; in seconds</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageautodeletetimerchanged
 */
class MessageAutoDeleteTimerChanged
{
    /**
    * <p>New auto-delete time for messages in the chat; in seconds</p>
    * @var int
    */
    public int $message_auto_delete_time;



    public function __construct($data)
    {
        $this->message_auto_delete_time = $data['message_auto_delete_time'];
    }
}