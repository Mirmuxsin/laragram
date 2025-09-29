<?php

namespace Milly\Laragram\Types;

/**
* BackgroundFill
 *
 *<p>This object describes the way a background is filled based on the selected colors. Currently, it can be one of</p><p>* <a href="https://core.telegram.org/bots/api/#backgroundfillsolid">BackgroundFillSolid</a>
* <a href="https://core.telegram.org/bots/api/#backgroundfillgradient">BackgroundFillGradient</a>
* <a href="https://core.telegram.org/bots/api/#backgroundfillfreeformgradient">BackgroundFillFreeformGradient</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundfill
 */
class BackgroundFill
{
    public ?BackgroundFillSolid $backgroundFillSolid = null;
    public ?BackgroundFillGradient $backgroundFillGradient = null;
    public ?BackgroundFillFreeformGradient $backgroundFillFreeformGradient = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create BackgroundFillSolid
        try {
            $backgroundFillSolid = new BackgroundFillSolid($data);
            $successfulType = 'BackgroundFillSolid';
            $successfulObject = $backgroundFillSolid;
            goto success;
        } catch (\Exception $e) {
            $errors['BackgroundFillSolid'] = $e->getMessage();
        }

        // Try to create BackgroundFillGradient
        try {
            $backgroundFillGradient = new BackgroundFillGradient($data);
            $successfulType = 'BackgroundFillGradient';
            $successfulObject = $backgroundFillGradient;
            goto success;
        } catch (\Exception $e) {
            $errors['BackgroundFillGradient'] = $e->getMessage();
        }

        // Try to create BackgroundFillFreeformGradient
        try {
            $backgroundFillFreeformGradient = new BackgroundFillFreeformGradient($data);
            $successfulType = 'BackgroundFillFreeformGradient';
            $successfulObject = $backgroundFillFreeformGradient;
            goto success;
        } catch (\Exception $e) {
            $errors['BackgroundFillFreeformGradient'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for BackgroundFill. Errors: ' . json_encode($errors));
        }
        
        success:
        // Set the successful object
        switch ($successfulType) {
            case 'BackgroundFillSolid':
                $this->backgroundFillSolid = $successfulObject;
                break;
            case 'BackgroundFillGradient':
                $this->backgroundFillGradient = $successfulObject;
                break;
            case 'BackgroundFillFreeformGradient':
                $this->backgroundFillFreeformGradient = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}