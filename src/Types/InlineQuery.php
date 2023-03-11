<?php

namespace Milly\Laragram\Types;


/**
* InlineQuery
 *
 *This object represents an incoming inline query. When the user sends an empty query, your bot could return some default or trending results.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequery
 */
class InlineQuery
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
    * Text of the query (up to 256 characters)
    * @var string
    */
    public string $query;

    /**
    * Offset of the results to be returned, can be controlled by the bot
    * @var string
    */
    public string $offset;

    /**
    * *Optional*. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat
    * @var string|null
    */
    public ?string $chat_type = null;

    /**
    * *Optional*. Sender location, only for bots that request user location
    * @var Location|null
    */
    public ?Location $location = null;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->from = new User($data['from']);

        $this->query = $data['query'];
        $this->offset = $data['offset'];
        if (isset($data['chat_type'])){
            $this->chat_type = $data['chat_type'];
        }

        if (isset($data['location'])){
            $this->location = new Location($data['location']);
        }

    }
}