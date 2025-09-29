<?php

namespace Milly\Laragram\Types;

/**
* BotCommandScopeAllGroupChats
 *
 *<p>Represents the <a href="https://core.telegram.org/bots/api/#botcommandscope">scope</a> of bot commands, covering all group and supergroup chats.</p>
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