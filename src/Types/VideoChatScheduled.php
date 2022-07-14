<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* VideoChatScheduled
 *
 *This object represents a service message about a video chat scheduled in the chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#videochatscheduled
 */
class VideoChatScheduled extends Laragram
{
    /**
    * Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator
    * @var int
    */
    public int $start_date;



    public function __construct($data)
    {
        $this->start_date = $data['start_date'];
    }
}