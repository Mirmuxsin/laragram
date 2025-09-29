<?php

namespace Milly\Laragram\Types;

/**
* BotCommandScopeAllPrivateChats
 *
 *<p>Represents the <a href="https://core.telegram.org/bots/api/#botcommandscope">scope</a> of bot commands, covering all private chats.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopeallprivatechats
 */
class BotCommandScopeAllPrivateChats
{
    /**
    * <p>Scope type, must be *all\<em>private\</em>chats*</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}