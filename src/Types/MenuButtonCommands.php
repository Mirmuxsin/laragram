<?php

namespace Milly\Laragram\Types;

/**
* MenuButtonCommands
 *
 *<p>Type of the button, must be *commands*</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#menubuttoncommands
 */
class MenuButtonCommands
{
    /**
    * <p>Type of the button, must be *commands*</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}