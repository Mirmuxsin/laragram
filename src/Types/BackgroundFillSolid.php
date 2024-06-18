<?php

namespace Milly\Laragram\Types;


/**
* BackgroundFillSolid
 *
 *<p>The color of the background fill in the RGB24 format</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundfillsolid
 */
class BackgroundFillSolid
{
    /**
    * <p>Type of the background fill, always “solid”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>The color of the background fill in the RGB24 format</p>
    * @var int
    */
    public int $color;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->color = $data['color'];
    }
}