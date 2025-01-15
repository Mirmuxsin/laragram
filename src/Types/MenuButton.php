<?php

namespace Milly\Laragram\Types;

/**
* MenuButton
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#menubutton
 */
class MenuButton
{


    public MenuButtonCommands $menuButtonCommands;

    public MenuButtonWebApp $menuButtonWebApp;

    public MenuButtonDefault $menuButtonDefault;



    public function __construct($data)
    {
        $this->menuButtonCommands = new MenuButtonCommands($data);
        $this->menuButtonWebApp = new MenuButtonWebApp($data);
        $this->menuButtonDefault = new MenuButtonDefault($data);
    }
}