<?php

namespace Milly\Laragram\Types;


/**
* MenuButtonDefault
 *
 *Describes that no specific value for the menu button was set.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#menubuttondefault
 */
class MenuButtonDefault
{
    /**
    * Type of the button, must be *default*
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}