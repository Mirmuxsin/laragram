<?php

namespace Milly\Laragram\Types;


/**
* ChosenInlineResult
 *
 *Represents a [result](https://core.telegram.org/bots/api/#inlinequeryresult) of an inline query that was chosen by the user and sent to their chat partner.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#choseninlineresult
 */
class ChosenInlineResult
{
    /**
    * The unique identifier for the result that was chosen
    * @var string
    */
    public string $result_id;

    /**
    * The user that chose the result
    * @var User
    */
    public User $from;

    /**
    * *Optional*. Sender location, only for bots that require user location
    * @var Location|null
    */
    public ?Location $location = null;

    /**
    * *Optional*. Identifier of the sent inline message. Available only if there is an [inline keyboard](https://core.telegram.org/bots/api/#inlinekeyboardmarkup) attached to the message. Will be also received in [callback queries](https://core.telegram.org/bots/api/#callbackquery) and can be used to [edit](https://core.telegram.org/bots/api/#updating-messages) the message.
    * @var string|null
    */
    public ?string $inline_message_id = null;

    /**
    * The query that was used to obtain the result
    * @var string
    */
    public string $query;



    public function __construct($data)
    {
        $this->result_id = $data['result_id'];
        $this->from = new User($data['from']);

        if (isset($data['location'])){
            $this->location = new Location($data['location']);
        }

        if (isset($data['inline_message_id'])){
            $this->inline_message_id = $data['inline_message_id'];
        }

        $this->query = $data['query'];
    }
}