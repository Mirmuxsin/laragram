<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* MessageAutoDeleteTimerChanged
 *
 *This object represents a service message about a change in auto-delete timer settings.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageautodeletetimerchanged
 */
class MessageAutoDeleteTimerChanged extends Laragram
{
    /**
    * New auto-delete time for messages in the chat; in seconds
    * @var int
    */
    public int $message_auto_delete_time;



    public function __construct($data)
    {
        $this->message_auto_delete_time = $data['message_auto_delete_time'];
    }
}