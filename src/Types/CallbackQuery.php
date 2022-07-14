<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* CallbackQuery
 *
 *This object represents an incoming callback query from a callback button in an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating). If the button that originated the query was attached to a message sent by the bot, the field *message* will be present. If the button was attached to a message sent via the bot (in [inline mode](https://core.telegram.org/bots/api/#inline-mode)), the field *inline\_message\_id* will be present. Exactly one of the fields *data* or *game\_short\_name* will be present.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#callbackquery
 */
class CallbackQuery extends Laragram
{
    /**
    * Unique identifier for this query
    * @var string
    */
    public string $id;

    /**
    * Sender
    * @var User
    */
    public User $from;

    /**
    * *Optional*. Message with the callback button that originated the query. Note that message content and message date will not be available if the message is too old
    * @var Message|null
    */
    public ?Message $message = null;

    /**
    * *Optional*. Identifier of the message sent via the bot in inline mode, that originated the query.
    * @var string|null
    */
    public ?string $inline_message_id = null;

    /**
    * Global identifier, uniquely corresponding to the chat to which the message with the callback button was sent. Useful for high scores in [games](https://core.telegram.org/bots/api/#games).
    * @var string
    */
    public string $chat_instance;

    /**
    * *Optional*. Data associated with the callback button. Be aware that the message originated the query can contain no callback buttons with this data.
    * @var string|null
    */
    public ?string $data = null;

    /**
    * *Optional*. Short name of a [Game](https://core.telegram.org/bots/api/#games) to be returned, serves as the unique identifier for the game
    * @var string|null
    */
    public ?string $game_short_name = null;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->from = new User($data['from']);

        if (isset($data['message'])){
            $this->message = new Message($data['message']);
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