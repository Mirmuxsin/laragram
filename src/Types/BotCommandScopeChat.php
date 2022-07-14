<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* BotCommandScopeChat
 *
 *Represents the [scope](https://core.telegram.org/bots/api/#botcommandscope) of bot commands, covering a specific chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopechat
 */
class BotCommandScopeChat extends Laragram
{
    /**
    * Scope type, must be *chat*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
    * @var any_of
    */
    public any_of $chat_id;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->chat_id = $data['chat_id'];
    }
}