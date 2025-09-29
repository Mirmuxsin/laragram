<?php

namespace Milly\Laragram\Types;

/**
* BackgroundType
 *
 *<p>This object describes the type of a background. Currently, it can be one of</p><p>* <a href="https://core.telegram.org/bots/api/#backgroundtypefill">BackgroundTypeFill</a>
* <a href="https://core.telegram.org/bots/api/#backgroundtypewallpaper">BackgroundTypeWallpaper</a>
* <a href="https://core.telegram.org/bots/api/#backgroundtypepattern">BackgroundTypePattern</a>
* <a href="https://core.telegram.org/bots/api/#backgroundtypechattheme">BackgroundTypeChatTheme</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundtype
 */
class BackgroundType
{
    public ?BackgroundTypeFill $backgroundTypeFill = null;
    public ?BackgroundTypeWallpaper $backgroundTypeWallpaper = null;
    public ?BackgroundTypePattern $backgroundTypePattern = null;
    public ?BackgroundTypeChatTheme $backgroundTypeChatTheme = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create BackgroundTypeFill
        try {
            $backgroundTypeFill = new BackgroundTypeFill($data);
            $successfulType = 'BackgroundTypeFill';
            $successfulObject = $backgroundTypeFill;
            goto success;
        } catch (\Exception $e) {
            $errors['BackgroundTypeFill'] = $e->getMessage();
        }

        // Try to create BackgroundTypeWallpaper
        try {
            $backgroundTypeWallpaper = new BackgroundTypeWallpaper($data);
            $successfulType = 'BackgroundTypeWallpaper';
            $successfulObject = $backgroundTypeWallpaper;
            goto success;
        } catch (\Exception $e) {
            $errors['BackgroundTypeWallpaper'] = $e->getMessage();
        }

        // Try to create BackgroundTypePattern
        try {
            $backgroundTypePattern = new BackgroundTypePattern($data);
            $successfulType = 'BackgroundTypePattern';
            $successfulObject = $backgroundTypePattern;
            goto success;
        } catch (\Exception $e) {
            $errors['BackgroundTypePattern'] = $e->getMessage();
        }

        // Try to create BackgroundTypeChatTheme
        try {
            $backgroundTypeChatTheme = new BackgroundTypeChatTheme($data);
            $successfulType = 'BackgroundTypeChatTheme';
            $successfulObject = $backgroundTypeChatTheme;
            goto success;
        } catch (\Exception $e) {
            $errors['BackgroundTypeChatTheme'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for BackgroundType. Errors: ' . json_encode($errors));
        }
        
        success:
        // Set the successful object
        switch ($successfulType) {
            case 'BackgroundTypeFill':
                $this->backgroundTypeFill = $successfulObject;
                break;
            case 'BackgroundTypeWallpaper':
                $this->backgroundTypeWallpaper = $successfulObject;
                break;
            case 'BackgroundTypePattern':
                $this->backgroundTypePattern = $successfulObject;
                break;
            case 'BackgroundTypeChatTheme':
                $this->backgroundTypeChatTheme = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}