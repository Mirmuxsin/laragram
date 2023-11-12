<?php

namespace Milly\Laragram\Types;


/**
* MenuButtonDefault
 *
 *<p>Type of the button, must be *default*</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#menubuttondefault
 */
class MenuButtonDefault
{
    /**
    * <p>Type of the button, must be *default*</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}