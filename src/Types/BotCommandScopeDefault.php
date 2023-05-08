<?php

namespace Milly\Laragram\Types;


/**
* BotCommandScopeDefault
 *
 *Represents the default [scope](https://core.telegram.org/bots/api/#botcommandscope) of bot commands. Default commands are used if no commands with a [narrower scope](https://core.telegram.org/bots/api/#determining-list-of-commands) are specified for the user.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopedefault
 */
class BotCommandScopeDefault
{
    /**
    * Scope type, must be *default*
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}