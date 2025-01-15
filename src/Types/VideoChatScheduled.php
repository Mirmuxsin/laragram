<?php

namespace Milly\Laragram\Types;

/**
* VideoChatScheduled
 *
 *<p>Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#videochatscheduled
 */
class VideoChatScheduled
{
    /**
    * <p>Point in time (Unix timestamp) when the video chat is supposed to be started by a chat administrator</p>
    * @var int
    */
    public int $start_date;



    public function __construct($data)
    {
        $this->start_date = $data['start_date'];
    }
}