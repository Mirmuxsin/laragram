<?php

namespace Milly\Laragram\Types;


/**
* SwitchInlineQueryChosenChat
 *
 *<p>*Optional*. True, if channel chats can be chosen</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#switchinlinequerychosenchat
 */
class SwitchInlineQueryChosenChat
{
    /**
    * <p>*Optional*. The default inline query to be inserted in the input field. If left empty, only the bot's username will be inserted</p>
    * @var string|null
    */
    public ?string $query = null;

    /**
    * <p>*Optional*. True, if private chats with users can be chosen</p>
    * @var bool|null
    */
    public ?bool $allow_user_chats = null;

    /**
    * <p>*Optional*. True, if private chats with bots can be chosen</p>
    * @var bool|null
    */
    public ?bool $allow_bot_chats = null;

    /**
    * <p>*Optional*. True, if group and supergroup chats can be chosen</p>
    * @var bool|null
    */
    public ?bool $allow_group_chats = null;

    /**
    * <p>*Optional*. True, if channel chats can be chosen</p>
    * @var bool|null
    */
    public ?bool $allow_channel_chats = null;



    public function __construct($data)
    {
        if (isset($data['query'])){
            $this->query = $data['query'];
        }

        if (isset($data['allow_user_chats'])){
            $this->allow_user_chats = $data['allow_user_chats'];
        }

        if (isset($data['allow_bot_chats'])){
            $this->allow_bot_chats = $data['allow_bot_chats'];
        }

        if (isset($data['allow_group_chats'])){
            $this->allow_group_chats = $data['allow_group_chats'];
        }

        if (isset($data['allow_channel_chats'])){
            $this->allow_channel_chats = $data['allow_channel_chats'];
        }

    }
}