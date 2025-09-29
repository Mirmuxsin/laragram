<?php

namespace Milly\Laragram\Types;

/**
* InputPaidMedia
 *
 *<p>This object describes the paid media to be sent. Currently, it can be one of</p><p>* <a href="https://core.telegram.org/bots/api/#inputpaidmediaphoto">InputPaidMediaPhoto</a>
* <a href="https://core.telegram.org/bots/api/#inputpaidmediavideo">InputPaidMediaVideo</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputpaidmedia
 */
class InputPaidMedia
{
    public ?InputPaidMediaPhoto $inputPaidMediaPhoto = null;
    public ?InputPaidMediaVideo $inputPaidMediaVideo = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create InputPaidMediaPhoto
        try {
            $inputPaidMediaPhoto = new InputPaidMediaPhoto($data);
            $successfulType = 'InputPaidMediaPhoto';
            $successfulObject = $inputPaidMediaPhoto;
            goto success;
        } catch (\Exception $e) {
            $errors['InputPaidMediaPhoto'] = $e->getMessage();
        }

        // Try to create InputPaidMediaVideo
        try {
            $inputPaidMediaVideo = new InputPaidMediaVideo($data);
            $successfulType = 'InputPaidMediaVideo';
            $successfulObject = $inputPaidMediaVideo;
            goto success;
        } catch (\Exception $e) {
            $errors['InputPaidMediaVideo'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for InputPaidMedia. Errors: ' . json_encode($errors));
        }
        
        success:
        // Set the successful object
        switch ($successfulType) {
            case 'InputPaidMediaPhoto':
                $this->inputPaidMediaPhoto = $successfulObject;
                break;
            case 'InputPaidMediaVideo':
                $this->inputPaidMediaVideo = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}