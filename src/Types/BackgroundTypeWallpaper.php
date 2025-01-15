<?php

namespace Milly\Laragram\Types;

/**
* BackgroundTypeWallpaper
 *
 *<p>*Optional*. *True*, if the background moves slightly when the device is tilted</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundtypewallpaper
 */
class BackgroundTypeWallpaper
{
    /**
    * <p>Type of the background, always “wallpaper”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Document with the wallpaper</p>
    * @var Document
    */
    public Document $document;

    /**
    * <p>Dimming of the background in dark themes, as a percentage; 0-100</p>
    * @var int
    */
    public int $dark_theme_dimming;

    /**
    * <p>*Optional*. *True*, if the wallpaper is downscaled to fit in a 450x450 square and then box-blurred with radius 12</p>
    * @var bool|null
    */
    public ?bool $is_blurred = null;

    /**
    * <p>*Optional*. *True*, if the background moves slightly when the device is tilted</p>
    * @var bool|null
    */
    public ?bool $is_moving = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->document = new Document($data['document']);

        $this->dark_theme_dimming = $data['dark_theme_dimming'];
        if (isset($data['is_blurred'])){
            $this->is_blurred = $data['is_blurred'];
        }

        if (isset($data['is_moving'])){
            $this->is_moving = $data['is_moving'];
        }

    }
}