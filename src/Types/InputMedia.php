<?php

namespace Milly\Laragram\Types;

/**
* InputMedia
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputmedia
 */
class InputMedia
{


    public InputMediaAnimation $inputMediaAnimation;

    public InputMediaDocument $inputMediaDocument;

    public InputMediaAudio $inputMediaAudio;

    public InputMediaPhoto $inputMediaPhoto;

    public InputMediaVideo $inputMediaVideo;



    public function __construct($data)
    {
        $this->inputMediaAnimation = new InputMediaAnimation($data);
        $this->inputMediaDocument = new InputMediaDocument($data);
        $this->inputMediaAudio = new InputMediaAudio($data);
        $this->inputMediaPhoto = new InputMediaPhoto($data);
        $this->inputMediaVideo = new InputMediaVideo($data);
    }
}