<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* BotCommandScopeChatMember
 *
 *Represents the [scope](https://core.telegram.org/bots/api/#botcommandscope) of bot commands, covering a specific member of a group or supergroup chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopechatmember
 */
class BotCommandScopeChatMember extends Laragram
{
    /**
    * Scope type, must be *chat\_member*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
    * @var any_of
    */
    public any_of $chat_id;

    /**
    * Unique identifier of the target user
    * @var int
    */
    public int $user_id;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->chat_id = $data['chat_id'];
        $this->user_id = $data['user_id'];
    }
}