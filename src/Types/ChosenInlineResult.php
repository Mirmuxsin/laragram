<?php

namespace Milly\Laragram\Types;


/**
* ChosenInlineResult
 *
 *<p>The query that was used to obtain the result</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#choseninlineresult
 */
class ChosenInlineResult
{
    /**
    * <p>The unique identifier for the result that was chosen</p>
    * @var string
    */
    public string $result_id;

    /**
    * <p>The user that chose the result</p>
    * @var User
    */
    public User $from;

    /**
    * <p>*Optional*. Sender location, only for bots that require user location</p>
    * @var Location|null
    */
    public ?Location $location = null;

    /**
    * <p>*Optional*. Identifier of the sent inline message. Available only if there is an <a href="https://core.telegram.org/bots/api/#inlinekeyboardmarkup">inline keyboard</a> attached to the message. Will be also received in <a href="https://core.telegram.org/bots/api/#callbackquery">callback queries</a> and can be used to <a href="https://core.telegram.org/bots/api/#updating-messages">edit</a> the message.</p>
    * @var string|null
    */
    public ?string $inline_message_id = null;

    /**
    * <p>The query that was used to obtain the result</p>
    * @var string
    */
    public string $query;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['chosen_inline_result'];
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