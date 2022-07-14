<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* BotCommandScopeChatAdministrators
 *
 *Represents the [scope](https://core.telegram.org/bots/api/#botcommandscope) of bot commands, covering all administrators of a specific group or supergroup chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopechatadministrators
 */
class BotCommandScopeChatAdministrators extends Laragram
{
    /**
    * Scope type, must be *chat\_administrators*
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