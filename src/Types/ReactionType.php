<?php

namespace Milly\Laragram\Types;

/**
* ReactionType
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#reactiontype
 */
class ReactionType
{


    public ReactionTypeEmoji $reactionTypeEmoji;

    public ReactionTypeCustomEmoji $reactionTypeCustomEmoji;

    public ReactionTypePaid $reactionTypePaid;



    public function __construct($data)
    {
        $this->reactionTypeEmoji = new ReactionTypeEmoji($data);
        $this->reactionTypeCustomEmoji = new ReactionTypeCustomEmoji($data);
        $this->reactionTypePaid = new ReactionTypePaid($data);
    }
}