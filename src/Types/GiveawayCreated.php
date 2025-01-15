<?php

namespace Milly\Laragram\Types;

/**
* GiveawayCreated
 *
 *<p>*Optional*. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#giveawaycreated
 */
class GiveawayCreated
{
    /**
    * <p>*Optional*. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only</p>
    * @var int|null
    */
    public ?int $prize_star_count = null;



    public function __construct($data)
    {
        if (isset($data['prize_star_count'])){
            $this->prize_star_count = $data['prize_star_count'];
        }

    }
}