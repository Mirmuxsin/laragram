<?php

namespace Milly\Laragram\Types;

/**
* BackgroundFill
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundfill
 */
class BackgroundFill
{


    public BackgroundFillSolid $backgroundFillSolid;

    public BackgroundFillGradient $backgroundFillGradient;

    public BackgroundFillFreeformGradient $backgroundFillFreeformGradient;



    public function __construct($data)
    {
        $this->backgroundFillSolid = new BackgroundFillSolid($data);
        $this->backgroundFillGradient = new BackgroundFillGradient($data);
        $this->backgroundFillFreeformGradient = new BackgroundFillFreeformGradient($data);
    }
}