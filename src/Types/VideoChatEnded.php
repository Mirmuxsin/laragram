<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* VideoChatEnded
 *
 *This object represents a service message about a video chat ended in the chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#videochatended
 */
class VideoChatEnded extends Laragram
{
    /**
    * Video chat duration in seconds
    * @var int
    */
    public int $duration;



    public function __construct($data)
    {
        $this->duration = $data['duration'];
    }
}