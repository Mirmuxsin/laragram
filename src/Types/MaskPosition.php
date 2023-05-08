<?php

namespace Milly\Laragram\Types;


/**
* MaskPosition
 *
 *This object describes the position on faces where a mask should be placed by default.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#maskposition
 */
class MaskPosition
{
    /**
    * The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.
    * @var string
    */
    public string $point;

    /**
    * Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.
    * @var float
    */
    public float $x_shift;

    /**
    * Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.
    * @var float
    */
    public float $y_shift;

    /**
    * Mask scaling coefficient. For example, 2.0 means double size.
    * @var float
    */
    public float $scale;



    public function __construct($data)
    {
        $this->point = $data['point'];
        $this->x_shift = $data['x_shift'];
        $this->y_shift = $data['y_shift'];
        $this->scale = $data['scale'];
    }
}