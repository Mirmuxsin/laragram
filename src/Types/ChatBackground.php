<?php

namespace Milly\Laragram\Types;


/**
* ChatBackground
 *
 *<p>Type of the background</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatbackground
 */
class ChatBackground
{
    /**
    * <p>Type of the background</p>
    * @var BackgroundType
    */
    public BackgroundType $type;



    public function __construct($data)
    {
        $this->type = new BackgroundType($data['type']);

    }
}