<?php

namespace Milly\Laragram\Types;

/**
* MaskPosition
 *
 *<p>Mask scaling coefficient. For example, 2.0 means double size.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#maskposition
 */
class MaskPosition
{
    /**
    * <p>The part of the face relative to which the mask should be placed. One of “forehead”, “eyes”, “mouth”, or “chin”.</p>
    * @var string
    */
    public string $point;

    /**
    * <p>Shift by X-axis measured in widths of the mask scaled to the face size, from left to right. For example, choosing -1.0 will place mask just to the left of the default mask position.</p>
    * @var float
    */
    public float $x_shift;

    /**
    * <p>Shift by Y-axis measured in heights of the mask scaled to the face size, from top to bottom. For example, 1.0 will place the mask just below the default mask position.</p>
    * @var float
    */
    public float $y_shift;

    /**
    * <p>Mask scaling coefficient. For example, 2.0 means double size.</p>
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