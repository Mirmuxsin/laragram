<?php

namespace Milly\Laragram\Types;

/**
* MenuButton
 *
 *<p>This object describes the bot's menu button in a private chat. It should be one of</p><p>* <a href="https://core.telegram.org/bots/api/#menubuttoncommands">MenuButtonCommands</a>
* <a href="https://core.telegram.org/bots/api/#menubuttonwebapp">MenuButtonWebApp</a>
* <a href="https://core.telegram.org/bots/api/#menubuttondefault">MenuButtonDefault</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#menubutton
 */
class MenuButton
{
    public ?MenuButtonCommands $menuButtonCommands = null;
    public ?MenuButtonWebApp $menuButtonWebApp = null;
    public ?MenuButtonDefault $menuButtonDefault = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create MenuButtonCommands
        try {
            $menuButtonCommands = new MenuButtonCommands($data);
            $successfulType = 'MenuButtonCommands';
            $successfulObject = $menuButtonCommands;
            goto success;
        } catch (\Exception $e) {
            $errors['MenuButtonCommands'] = $e->getMessage();
        }

        // Try to create MenuButtonWebApp
        try {
            $menuButtonWebApp = new MenuButtonWebApp($data);
            $successfulType = 'MenuButtonWebApp';
            $successfulObject = $menuButtonWebApp;
            goto success;
        } catch (\Exception $e) {
            $errors['MenuButtonWebApp'] = $e->getMessage();
        }

        // Try to create MenuButtonDefault
        try {
            $menuButtonDefault = new MenuButtonDefault($data);
            $successfulType = 'MenuButtonDefault';
            $successfulObject = $menuButtonDefault;
            goto success;
        } catch (\Exception $e) {
            $errors['MenuButtonDefault'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for MenuButton. Errors: ' . json_encode($errors));
        }
        
        success:
        // Set the successful object
        switch ($successfulType) {
            case 'MenuButtonCommands':
                $this->menuButtonCommands = $successfulObject;
                break;
            case 'MenuButtonWebApp':
                $this->menuButtonWebApp = $successfulObject;
                break;
            case 'MenuButtonDefault':
                $this->menuButtonDefault = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}