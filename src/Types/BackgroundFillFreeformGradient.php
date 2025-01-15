<?php

namespace Milly\Laragram\Types;

/**
* BackgroundFillFreeformGradient
 *
 *<p>A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundfillfreeformgradient
 */
class BackgroundFillFreeformGradient
{
    /**
    * <p>Type of the background fill, always “freeform\_gradient”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>A list of the 3 or 4 base colors that are used to generate the freeform gradient in the RGB24 format</p>
    * @var array
    */
    public array $colors;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->colors = $data['colors'];
    }
}