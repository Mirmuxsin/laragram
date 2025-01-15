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
    * <p>*Optional*. Special entities that appear in the option *text*. Currently, only custom emoji entities are allowed in poll option texts</p>
    * @var array|null
    */
    public ?array $text_entities = null;

    /**
    * <p>Number of users that voted for this option</p>
    * @var int
    */
    public int $voter_count;



    public function __construct($data)
    {
        $this->text = $data['text'];
        if (isset($data['text_entities'])){
            $this->text_entities = $data['text_entities'];
        }

        $this->voter_count = $data['voter_count'];
    }
}