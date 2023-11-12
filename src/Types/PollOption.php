<?php

namespace Milly\Laragram\Types;


/**
* PollOption
 *
 *<p>Number of users that voted for this option</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#polloption
 */
class PollOption
{
    /**
    * <p>Option text, 1-100 characters</p>
    * @var string
    */
    public string $text;

    /**
    * <p>Number of users that voted for this option</p>
    * @var int
    */
    public int $voter_count;



    public function __construct($data)
    {
        $this->text = $data['text'];
        $this->voter_count = $data['voter_count'];
    }
}