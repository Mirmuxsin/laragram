<?php

namespace Milly\Laragram\Types;


/**
* PollAnswer
 *
 *<p>0-based identifiers of chosen answer options. May be empty if the vote was retracted.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#pollanswer
 */
class PollAnswer
{
    /**
    * <p>Unique poll identifier</p>
    * @var string
    */
    public string $poll_id;

    /**
    * <p>*Optional*. The chat that changed the answer to the poll, if the voter is anonymous</p>
    * @var Chat|null
    */
    public ?Chat $voter_chat = null;

    /**
    * <p>*Optional*. The user that changed the answer to the poll, if the voter isn't anonymous</p>
    * @var User|null
    */
    public ?User $user = null;

    /**
    * <p>0-based identifiers of chosen answer options. May be empty if the vote was retracted.</p>
    * @var array
    */
    public array $option_ids;



    public function __construct($data)
    {
        $this->poll_id = $data['poll_id'];
        if (isset($data['voter_chat'])){
            $this->voter_chat = new Chat($data['voter_chat']);
        }

        if (isset($data['user'])){
            $this->user = new User($data['user']);
        }

        $this->option_ids = $data['option_ids'];
    }
}