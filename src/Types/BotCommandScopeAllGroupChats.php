<?php

namespace Milly\Laragram\Types;


/**
* BotCommandScopeAllGroupChats
 *
 *Represents the [scope](https://core.telegram.org/bots/api/#botcommandscope) of bot commands, covering all group and supergroup chats.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopeallgroupchats
 */
class BotCommandScopeAllGroupChats
{
    /**
    * Scope type, must be *all\_group\_chats*
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}