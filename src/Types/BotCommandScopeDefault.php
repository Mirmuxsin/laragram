<?php

namespace Milly\Laragram\Types;


/**
* BotCommandScopeDefault
 *
 *<p>Scope type, must be *default*</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopedefault
 */
class BotCommandScopeDefault
{
    /**
    * <p>Scope type, must be *default*</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}