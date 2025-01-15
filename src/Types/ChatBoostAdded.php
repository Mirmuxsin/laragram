<?php

namespace Milly\Laragram\Types;

/**
* ChatBoostAdded
 *
 *<p>Number of boosts added by the user</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatboostadded
 */
class ChatBoostAdded
{
    /**
    * <p>Number of boosts added by the user</p>
    * @var int
    */
    public int $boost_count;



    public function __construct($data)
    {
        $this->boost_count = $data['boost_count'];
    }
}