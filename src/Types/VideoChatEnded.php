<?php

namespace Milly\Laragram\Types;

/**
* VideoChatEnded
 *
 *<p>Video chat duration in seconds</p>
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