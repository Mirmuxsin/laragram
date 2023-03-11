<?php

namespace Milly\Laragram\Types;


/**
* PollAnswer
 *
 *This object represents an answer of a user in a non-anonymous poll.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#pollanswer
 */
class PollAnswer
{
    /**
    * Unique poll identifier
    * @var string
    */
    public string $poll_id;

    /**
    * The user, who changed the answer to the poll
    * @var User
    */
    public User $user;

    /**
    * 0-based identifiers of answer options, chosen by the user. May be empty if the user retracted their vote.
    * @var array
    */
    public array $option_ids;



    public function __construct($data)
    {
        $this->poll_id = $data['poll_id'];
        $this->user = new User($data['user']);

        $this->option_ids = $data['option_ids'];
    }
}