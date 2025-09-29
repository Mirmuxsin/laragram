<?php

namespace Milly\Laragram\Types;

/**
* PaidMedia
 *
 *<p>This object describes paid media. Currently, it can be one of</p><p>* <a href="https://core.telegram.org/bots/api/#paidmediapreview">PaidMediaPreview</a>
* <a href="https://core.telegram.org/bots/api/#paidmediaphoto">PaidMediaPhoto</a>
* <a href="https://core.telegram.org/bots/api/#paidmediavideo">PaidMediaVideo</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#paidmedia
 */
class PaidMedia
{
    public ?PaidMediaPreview $paidMediaPreview = null;
    public ?PaidMediaPhoto $paidMediaPhoto = null;
    public ?PaidMediaVideo $paidMediaVideo = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create PaidMediaPreview
        try {
            $paidMediaPreview = new PaidMediaPreview($data);
            $successfulType = 'PaidMediaPreview';
            $successfulObject = $paidMediaPreview;
            goto success;
        } catch (\Exception $e) {
            $errors['PaidMediaPreview'] = $e->getMessage();
        }

        // Try to create PaidMediaPhoto
        try {
            $paidMediaPhoto = new PaidMediaPhoto($data);
            $successfulType = 'PaidMediaPhoto';
            $successfulObject = $paidMediaPhoto;
            goto success;
        } catch (\Exception $e) {
            $errors['PaidMediaPhoto'] = $e->getMessage();
        }

        // Try to create PaidMediaVideo
        try {
            $paidMediaVideo = new PaidMediaVideo($data);
            $successfulType = 'PaidMediaVideo';
            $successfulObject = $paidMediaVideo;
            goto success;
        } catch (\Exception $e) {
            $errors['PaidMediaVideo'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for PaidMedia. Errors: ' . json_encode($errors));
        }
        
        success:
        // Set the successful object
        switch ($successfulType) {
            case 'PaidMediaPreview':
                $this->paidMediaPreview = $successfulObject;
                break;
            case 'PaidMediaPhoto':
                $this->paidMediaPhoto = $successfulObject;
                break;
            case 'PaidMediaVideo':
                $this->paidMediaVideo = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}