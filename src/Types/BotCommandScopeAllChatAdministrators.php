<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* BotCommandScopeAllChatAdministrators
 *
 *Represents the [scope](https://core.telegram.org/bots/api/#botcommandscope) of bot commands, covering all group and supergroup chat administrators.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopeallchatadministrators
 */
class BotCommandScopeAllChatAdministrators extends Laragram
{
    /**
    * Scope type, must be *all\_chat\_administrators*
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}