<?php

namespace Milly\Laragram\Types;

/**
* ReactionTypePaid
 *
 *<p>The reaction is paid.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#reactiontypepaid
 */
class ReactionTypePaid
{
    /**
    * <p>Type of the reaction, always “paid”</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}