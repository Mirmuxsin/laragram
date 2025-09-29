<?php

namespace Milly\Laragram\Types;

/**
* InputMedia
 *
 *<p>This object represents the content of a media message to be sent. It should be one of</p><p>* <a href="https://core.telegram.org/bots/api/#inputmediaanimation">InputMediaAnimation</a>
* <a href="https://core.telegram.org/bots/api/#inputmediadocument">InputMediaDocument</a>
* <a href="https://core.telegram.org/bots/api/#inputmediaaudio">InputMediaAudio</a>
* <a href="https://core.telegram.org/bots/api/#inputmediaphoto">InputMediaPhoto</a>
* <a href="https://core.telegram.org/bots/api/#inputmediavideo">InputMediaVideo</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputmedia
 */
class InputMedia
{
    public ?InputMediaAnimation $inputMediaAnimation = null;
    public ?InputMediaDocument $inputMediaDocument = null;
    public ?InputMediaAudio $inputMediaAudio = null;
    public ?InputMediaPhoto $inputMediaPhoto = null;
    public ?InputMediaVideo $inputMediaVideo = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create InputMediaAnimation
        try {
            $inputMediaAnimation = new InputMediaAnimation($data);
            $successfulType = 'InputMediaAnimation';
            $successfulObject = $inputMediaAnimation;
            goto success;
        } catch (\Exception $e) {
            $errors['InputMediaAnimation'] = $e->getMessage();
        }

        // Try to create InputMediaDocument
        try {
            $inputMediaDocument = new InputMediaDocument($data);
            $successfulType = 'InputMediaDocument';
            $successfulObject = $inputMediaDocument;
            goto success;
        } catch (\Exception $e) {
            $errors['InputMediaDocument'] = $e->getMessage();
        }

        // Try to create InputMediaAudio
        try {
            $inputMediaAudio = new InputMediaAudio($data);
            $successfulType = 'InputMediaAudio';
            $successfulObject = $inputMediaAudio;
            goto success;
        } catch (\Exception $e) {
            $errors['InputMediaAudio'] = $e->getMessage();
        }

        // Try to create InputMediaPhoto
        try {
            $inputMediaPhoto = new InputMediaPhoto($data);
            $successfulType = 'InputMediaPhoto';
            $successfulObject = $inputMediaPhoto;
            goto success;
        } catch (\Exception $e) {
            $errors['InputMediaPhoto'] = $e->getMessage();
        }

        // Try to create InputMediaVideo
        try {
            $inputMediaVideo = new InputMediaVideo($data);
            $successfulType = 'InputMediaVideo';
            $successfulObject = $inputMediaVideo;
            goto success;
        } catch (\Exception $e) {
            $errors['InputMediaVideo'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for InputMedia. Errors: ' . json_encode($errors));
        }
        
        success:
        // Set the successful object
        switch ($successfulType) {
            case 'InputMediaAnimation':
                $this->inputMediaAnimation = $successfulObject;
                break;
            case 'InputMediaDocument':
                $this->inputMediaDocument = $successfulObject;
                break;
            case 'InputMediaAudio':
                $this->inputMediaAudio = $successfulObject;
                break;
            case 'InputMediaPhoto':
                $this->inputMediaPhoto = $successfulObject;
                break;
            case 'InputMediaVideo':
                $this->inputMediaVideo = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}