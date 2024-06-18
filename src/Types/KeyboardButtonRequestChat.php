<?php

namespace Milly\Laragram\Types;


/**
* KeyboardButtonRequestChat
 *
 *<p>*Optional*. Pass *True* to request the chat's photo</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#keyboardbuttonrequestchat
 */
class KeyboardButtonRequestChat
{
    /**
    * <p>Signed 32-bit identifier of the request, which will be received back in the <a href="https://core.telegram.org/bots/api/#chatshared">ChatShared</a> object. Must be unique within the message</p>
    * @var int
    */
    public int $request_id;

    /**
    * <p>Pass *True* to request a channel chat, pass *False* to request a group or a supergroup chat.</p>
    * @var bool
    */
    public bool $chat_is_channel;

    /**
    * <p>*Optional*. Pass *True* to request a forum supergroup, pass *False* to request a non-forum chat. If not specified, no additional restrictions are applied.</p>
    * @var bool|null
    */
    public ?bool $chat_is_forum = null;

    /**
    * <p>*Optional*. Pass *True* to request a supergroup or a channel with a username, pass *False* to request a chat without a username. If not specified, no additional restrictions are applied.</p>
    * @var bool|null
    */
    public ?bool $chat_has_username = null;

    /**
    * <p>*Optional*. Pass *True* to request a chat owned by the user. Otherwise, no additional restrictions are applied.</p>
    * @var bool|null
    */
    public ?bool $chat_is_created = null;

    /**
    * <p>*Optional*. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of *bot\<em>administrator\</em>rights*. If not specified, no additional restrictions are applied.</p>
    * @var ChatAdministratorRights|null
    */
    public ?ChatAdministratorRights $user_administrator_rights = null;

    /**
    * <p>*Optional*. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of *user\<em>administrator\</em>rights*. If not specified, no additional restrictions are applied.</p>
    * @var ChatAdministratorRights|null
    */
    public ?ChatAdministratorRights $bot_administrator_rights = null;

    /**
    * <p>*Optional*. Pass *True* to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.</p>
    * @var bool|null
    */
    public ?bool $bot_is_member = null;

    /**
    * <p>*Optional*. Pass *True* to request the chat's title</p>
    * @var bool|null
    */
    public ?bool $request_title = null;

    /**
    * <p>*Optional*. Pass *True* to request the chat's username</p>
    * @var bool|null
    */
    public ?bool $request_username = null;

    /**
    * <p>*Optional*. Pass *True* to request the chat's photo</p>
    * @var bool|null
    */
    public ?bool $request_photo = null;



    public function __construct($data)
    {
        $this->request_id = $data['request_id'];
        $this->chat_is_channel = $data['chat_is_channel'];
        if (isset($data['chat_is_forum'])){
            $this->chat_is_forum = $data['chat_is_forum'];
        }

        if (isset($data['chat_has_username'])){
            $this->chat_has_username = $data['chat_has_username'];
        }

        if (isset($data['chat_is_created'])){
            $this->chat_is_created = $data['chat_is_created'];
        }

        if (isset($data['user_administrator_rights'])){
            $this->user_administrator_rights = new ChatAdministratorRights($data['user_administrator_rights']);
        }

        if (isset($data['bot_administrator_rights'])){
            $this->bot_administrator_rights = new ChatAdministratorRights($data['bot_administrator_rights']);
        }

        if (isset($data['bot_is_member'])){
            $this->bot_is_member = $data['bot_is_member'];
        }

        if (isset($data['request_title'])){
            $this->request_title = $data['request_title'];
        }

        if (isset($data['request_username'])){
            $this->request_username = $data['request_username'];
        }

        if (isset($data['request_photo'])){
            $this->request_photo = $data['request_photo'];
        }

    }
}