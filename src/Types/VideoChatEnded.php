<?php

namespace Milly\Laragram\Types;

/**
* VideoChatEnded
 *
 *<p>This object represents a service message about a video chat ended in the chat.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#videochatended
 */
class VideoChatEnded
{
    /**
    * <p>Video chat duration in seconds</p>
    * @var int
    */
    public int $duration;



    public function __construct($data)
    {
        $this->duration = $data['duration'];
    }
}