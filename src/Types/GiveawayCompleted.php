<?php

namespace Milly\Laragram\Types;


/**
* GiveawayCompleted
 *
 *<p>*Optional*. Message with the giveaway that was completed, if it wasn't deleted</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#giveawaycompleted
 */
class GiveawayCompleted
{
    /**
    * <p>Number of winners in the giveaway</p>
    * @var int
    */
    public int $winner_count;

    /**
    * <p>*Optional*. Number of undistributed prizes</p>
    * @var int|null
    */
    public ?int $unclaimed_prize_count = null;

    /**
    * <p>*Optional*. Message with the giveaway that was completed, if it wasn't deleted</p>
    * @var Message|null
    */
    public ?Message $giveaway_message = null;



    public function __construct($data)
    {
        $this->winner_count = $data['winner_count'];
        if (isset($data['unclaimed_prize_count'])){
            $this->unclaimed_prize_count = $data['unclaimed_prize_count'];
        }

        if (isset($data['giveaway_message'])){
            $this->giveaway_message = new Message($data['giveaway_message']);
        }

    }
}