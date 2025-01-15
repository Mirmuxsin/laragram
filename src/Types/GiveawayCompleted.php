<?php

namespace Milly\Laragram\Types;

/**
* GiveawayCompleted
 *
 *<p>*Optional*. *True*, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.</p>
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

    /**
    * <p>*Optional*. *True*, if the giveaway is a Telegram Star giveaway. Otherwise, currently, the giveaway is a Telegram Premium giveaway.</p>
    * @var bool|null
    */
    public ?bool $is_star_giveaway = null;



    public function __construct($data)
    {
        $this->winner_count = $data['winner_count'];
        if (isset($data['unclaimed_prize_count'])){
            $this->unclaimed_prize_count = $data['unclaimed_prize_count'];
        }

        if (isset($data['giveaway_message'])){
            $this->giveaway_message = new Message($data['giveaway_message']);
        }

        if (isset($data['is_star_giveaway'])){
            $this->is_star_giveaway = $data['is_star_giveaway'];
        }

    }
}