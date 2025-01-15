<?php

namespace Milly\Laragram\Types;

/**
* ChatBoostSourceGiveaway
 *
 *<p>*Optional*. True, if the giveaway was completed, but there was no user to win the prize</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatboostsourcegiveaway
 */
class ChatBoostSourceGiveaway
{
    /**
    * <p>Source of the boost, always “giveaway”</p>
    * @var string
    */
    public string $source;

    /**
    * <p>Identifier of a message in the chat with the giveaway; the message could have been deleted already. May be 0 if the message isn't sent yet.</p>
    * @var int
    */
    public int $giveaway_message_id;

    /**
    * <p>*Optional*. User that won the prize in the giveaway if any; for Telegram Premium giveaways only</p>
    * @var User|null
    */
    public ?User $user = null;

    /**
    * <p>*Optional*. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only</p>
    * @var int|null
    */
    public ?int $prize_star_count = null;

    /**
    * <p>*Optional*. True, if the giveaway was completed, but there was no user to win the prize</p>
    * @var bool|null
    */
    public ?bool $is_unclaimed = null;



    public function __construct($data)
    {
        $this->source = $data['source'];
        $this->giveaway_message_id = $data['giveaway_message_id'];
        if (isset($data['user'])){
            $this->user = new User($data['user']);
        }

        if (isset($data['prize_star_count'])){
            $this->prize_star_count = $data['prize_star_count'];
        }

        if (isset($data['is_unclaimed'])){
            $this->is_unclaimed = $data['is_unclaimed'];
        }

    }
}