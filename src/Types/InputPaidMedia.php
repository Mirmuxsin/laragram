<?php

namespace Milly\Laragram\Types;

/**
* InputPaidMedia
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputpaidmedia
 */
class InputPaidMedia
{


    public InputPaidMediaPhoto $inputPaidMediaPhoto;

    public InputPaidMediaVideo $inputPaidMediaVideo;



    public function __construct($data)
    {
        $this->inputPaidMediaPhoto = new InputPaidMediaPhoto($data);
        $this->inputPaidMediaVideo = new InputPaidMediaVideo($data);
    }
}