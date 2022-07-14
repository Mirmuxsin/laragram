<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* BotCommandScopeAllPrivateChats
 *
 *Represents the [scope](https://core.telegram.org/bots/api/#botcommandscope) of bot commands, covering all private chats.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopeallprivatechats
 */
class BotCommandScopeAllPrivateChats extends Laragram
{
    /**
    * Scope type, must be *all\_private\_chats*
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}