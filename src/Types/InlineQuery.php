<?php

namespace Milly\Laragram\Types;

/**
* InlineQuery
 *
 *<p>*Optional*. Sender location, only for bots that request user location</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequery
 */
class InlineQuery
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
    * <p>Text of the query (up to 256 characters)</p>
    * @var string
    */
    public string $query;

    /**
    * <p>Offset of the results to be returned, can be controlled by the bot</p>
    * @var string
    */
    public string $offset;

    /**
    * <p>*Optional*. Type of the chat from which the inline query was sent. Can be either “sender” for a private chat with the inline query sender, “private”, “group”, “supergroup”, or “channel”. The chat type should be always known for requests sent from official clients and most third-party clients, unless the request was sent from a secret chat</p>
    * @var string|null
    */
    public ?string $chat_type = null;

    /**
    * <p>*Optional*. Sender location, only for bots that request user location</p>
    * @var Location|null
    */
    public ?Location $location = null;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['inline_query'];
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