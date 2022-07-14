<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* MenuButtonCommands
 *
 *Represents a menu button, which opens the bot's list of commands.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#menubuttoncommands
 */
class MenuButtonCommands extends Laragram
{
    /**
    * Type of the button, must be *commands*
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}