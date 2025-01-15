<?php

namespace Milly\Laragram\Types;

/**
* CallbackQuery
 *
 *<p>*Optional*. Short name of a <a href="https://core.telegram.org/bots/api/#games">Game</a> to be returned, serves as the unique identifier for the game</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#callbackquery
 */
class CallbackQuery
{
    /**
    * <p>Unique identifier for this query</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Sender</p>
    * @var User
    */
    public User $from;

    /**
    * <p>*Optional*. Message sent by the bot with the callback button that originated the query</p>
    * @var MaybeInaccessibleMessage|null
    */
    public ?MaybeInaccessibleMessage $message = null;

    /**
    * <p>*Optional*. Identifier of the message sent via the bot in inline mode, that originated the query.</p>
    * @var string|null
    */
    public ?string $inline_message_id = null;

    /**
    * <p>Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in <a href="https://core.telegram.org/bots/api/#games">games</a>.</p>
    * @var string
    */
    public string $chat_instance;

    /**
    * <p>*Optional*. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.</p>
    * @var string|null
    */
    public ?string $data = null;

    /**
    * <p>*Optional*. Short name of a <a href="https://core.telegram.org/bots/api/#games">Game</a> to be returned, serves as the unique identifier for the game</p>
    * @var string|null
    */
    public ?string $game_short_name = null;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['callback_query'];
        $this->id = $data['id'];
        $this->from = new User($data['from']);

        if (isset($data['message'])){
            $this->message = new MaybeInaccessibleMessage($data['message']);
        }

        if (isset($data['inline_message_id'])){
            $this->inline_message_id = $data['inline_message_id'];
        }

        $this->chat_instance = $data['chat_instance'];
        if (isset($data['data'])){
            $this->data = $data['data'];
        }

        if (isset($data['game_short_name'])){
            $this->game_short_name = $data['game_short_name'];
        }

    }
}