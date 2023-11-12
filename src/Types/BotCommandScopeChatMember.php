<?php

namespace Milly\Laragram\Types;


/**
* BotCommandScopeChatMember
 *
 *<p>Unique identifier of the target user</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscopechatmember
 */
class BotCommandScopeChatMember
{
    /**
    * <p>Scope type, must be *chat\_member*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)</p>
    * @var any_of
    */
    public any_of $chat_id;

    /**
    * <p>Unique identifier of the target user</p>
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