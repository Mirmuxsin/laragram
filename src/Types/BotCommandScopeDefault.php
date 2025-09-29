<?php

namespace Milly\Laragram\Types;

/**
* BotCommandScopeDefault
 *
 *<p>Represents the default <a href="https://core.telegram.org/bots/api/#botcommandscope">scope</a> of bot commands. Default commands are used if no commands with a <a href="https://core.telegram.org/bots/api/#determining-list-of-commands">narrower scope</a> are specified for the user.</p>
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