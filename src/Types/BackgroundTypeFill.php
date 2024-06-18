<?php

namespace Milly\Laragram\Types;


/**
* BackgroundTypeFill
 *
 *<p>Dimming of the background in dark themes, as a percentage; 0-100</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundtypefill
 */
class BackgroundTypeFill
{
    /**
    * <p>Type of the background, always “fill”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>The background fill</p>
    * @var BackgroundFill
    */
    public BackgroundFill $fill;

    /**
    * <p>Dimming of the background in dark themes, as a percentage; 0-100</p>
    * @var int
    */
    public int $dark_theme_dimming;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->fill = new BackgroundFill($data['fill']);

        $this->dark_theme_dimming = $data['dark_theme_dimming'];
    }
}