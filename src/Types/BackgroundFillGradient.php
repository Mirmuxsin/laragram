<?php

namespace Milly\Laragram\Types;

/**
* BackgroundFillGradient
 *
 *<p>Clockwise rotation angle of the background fill in degrees; 0-359</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundfillgradient
 */
class BackgroundFillGradient
{
    /**
    * <p>Type of the background fill, always “gradient”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Top color of the gradient in the RGB24 format</p>
    * @var int
    */
    public int $top_color;

    /**
    * <p>Bottom color of the gradient in the RGB24 format</p>
    * @var int
    */
    public int $bottom_color;

    /**
    * <p>Clockwise rotation angle of the background fill in degrees; 0-359</p>
    * @var int
    */
    public int $rotation_angle;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->top_color = $data['top_color'];
        $this->bottom_color = $data['bottom_color'];
        $this->rotation_angle = $data['rotation_angle'];
    }
}