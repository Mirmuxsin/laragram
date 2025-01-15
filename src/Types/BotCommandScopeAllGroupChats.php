<?php

namespace Milly\Laragram\Types;

/**
* BotCommandScopeAllGroupChats
 *
 *<p>Scope type, must be *all\<em>group\</em>chats*</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopeallgroupchats
 */
class BotCommandScopeAllGroupChats
{
    /**
    * <p>Scope type, must be *all\<em>group\</em>chats*</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}