<?php

namespace Milly\Laragram\Types;

/**
* PaidMediaPreview
 *
 *<p>*Optional*. Duration of the media in seconds as defined by the sender</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#paidmediapreview
 */
class PaidMediaPreview
{
    /**
    * <p>Type of the paid media, always “preview”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>*Optional*. Media width as defined by the sender</p>
    * @var int|null
    */
    public ?int $width = null;

    /**
    * <p>*Optional*. Media height as defined by the sender</p>
    * @var int|null
    */
    public ?int $height = null;

    /**
    * <p>*Optional*. Duration of the media in seconds as defined by the sender</p>
    * @var int|null
    */
    public ?int $duration = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        if (isset($data['width'])){
            $this->width = $data['width'];
        }

        if (isset($data['height'])){
            $this->height = $data['height'];
        }

        if (isset($data['duration'])){
            $this->duration = $data['duration'];
        }

    }
}