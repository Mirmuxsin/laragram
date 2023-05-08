<?php

namespace Milly\Laragram\Types;


/**
* KeyboardButtonRequestChat
 *
 *This object defines the criteria used to request a suitable chat. The identifier of the selected chat will be shared with the bot when the corresponding button is pressed.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#keyboardbuttonrequestchat
 */
class KeyboardButtonRequestChat
{
    /**
    * Signed 32-bit identifier of the request, which will be received back in the [ChatShared](https://core.telegram.org/bots/api/#chatshared) object. Must be unique within the message
    * @var int
    */
    public int $request_id;

    /**
    * Pass *True* to request a channel chat, pass *False* to request a group or a supergroup chat.
    * @var bool
    */
    public bool $chat_is_channel;

    /**
    * *Optional*. Pass *True* to request a forum supergroup, pass *False* to request a non-forum chat. If not specified, no additional restrictions are applied.
    * @var bool|null
    */
    public ?bool $chat_is_forum = null;

    /**
    * *Optional*. Pass *True* to request a supergroup or a channel with a username, pass *False* to request a chat without a username. If not specified, no additional restrictions are applied.
    * @var bool|null
    */
    public ?bool $chat_has_username = null;

    /**
    * *Optional*. Pass *True* to request a chat owned by the user. Otherwise, no additional restrictions are applied.
    * @var bool|null
    */
    public ?bool $chat_is_created = null;

    /**
    * *Optional*. A JSON-serialized object listing the required administrator rights of the user in the chat. The rights must be a superset of *bot\_administrator\_rights*. If not specified, no additional restrictions are applied.
    * @var ChatAdministratorRights|null
    */
    public ?ChatAdministratorRights $user_administrator_rights = null;

    /**
    * *Optional*. A JSON-serialized object listing the required administrator rights of the bot in the chat. The rights must be a subset of *user\_administrator\_rights*. If not specified, no additional restrictions are applied.
    * @var ChatAdministratorRights|null
    */
    public ?ChatAdministratorRights $bot_administrator_rights = null;

    /**
    * *Optional*. Pass *True* to request a chat with the bot as a member. Otherwise, no additional restrictions are applied.
    * @var bool|null
    */
    public ?bool $bot_is_member = null;



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

    }
}