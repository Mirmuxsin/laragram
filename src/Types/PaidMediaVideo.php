<?php

namespace Milly\Laragram\Types;

/**
* PaidMediaVideo
 *
 *<p>The video</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#paidmediavideo
 */
class PaidMediaVideo
{
    /**
    * <p>Type of the paid media, always “video”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>The video</p>
    * @var Video
    */
    public Video $video;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->video = new Video($data['video']);

    }
}