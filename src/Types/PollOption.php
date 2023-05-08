<?php

namespace Milly\Laragram\Types;


/**
* PollOption
 *
 *This object contains information about one answer option in a poll.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#polloption
 */
class PollOption
{
    /**
    * Option text, 1-100 characters
    * @var string
    */
    public string $text;

    /**
    * Number of users that voted for this option
    * @var int
    */
    public int $voter_count;



    public function __construct($data)
    {
        $this->text = $data['text'];
        $this->voter_count = $data['voter_count'];
    }
}