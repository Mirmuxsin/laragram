<?php

namespace Milly\Laragram\Types;

/**
* BotCommandScopeChat
 *
 *<p>Represents the <a href="https://core.telegram.org/bots/api/#botcommandscope">scope</a> of bot commands, covering a specific chat.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopechat
 */
class BotCommandScopeChat
{
    /**
    * <p>Scope type, must be *chat*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
    * @var mixed
    */
    public mixed $chat_id;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->chat_id = $data['chat_id'];
    }
}