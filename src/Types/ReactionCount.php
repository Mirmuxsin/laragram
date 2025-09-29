<?php

namespace Milly\Laragram\Types;

/**
* ReactionCount
 *
 *<p>Represents a reaction added to a message along with the number of times it was added.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#reactioncount
 */
class ReactionCount
{
    /**
    * <p>Type of the reaction</p>
    * @var ReactionType
    */
    public ReactionType $type;

    /**
    * <p>Number of times the reaction was added</p>
    * @var int
    */
    public int $total_count;



    public function __construct($data)
    {
        $this->type = new ReactionType($data['type']);

        $this->total_count = $data['total_count'];
    }
}