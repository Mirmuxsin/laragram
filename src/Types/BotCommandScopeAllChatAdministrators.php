<?php

namespace Milly\Laragram\Types;


/**
* BotCommandScopeAllChatAdministrators
 *
 *<p>Scope type, must be *all\<em>chat\</em>administrators*</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopeallchatadministrators
 */
class BotCommandScopeAllChatAdministrators
{
    /**
    * <p>Scope type, must be *all\<em>chat\</em>administrators*</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}