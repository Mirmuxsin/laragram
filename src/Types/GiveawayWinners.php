<?php

namespace Milly\Laragram\Types;


/**
* GiveawayWinners
 *
 *<p>*Optional*. Description of additional giveaway prize</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#giveawaywinners
 */
class GiveawayWinners
{
    /**
    * <p>The chat that created the giveaway</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>Identifier of the message with the giveaway in the chat</p>
    * @var int
    */
    public int $giveaway_message_id;

    /**
    * <p>Point in time (Unix timestamp) when winners of the giveaway were selected</p>
    * @var int
    */
    public int $winners_selection_date;

    /**
    * <p>Total number of winners in the giveaway</p>
    * @var int
    */
    public int $winner_count;

    /**
    * <p>List of up to 100 winners of the giveaway</p>
    * @var array
    */
    public array $winners;

    /**
    * <p>*Optional*. The number of other chats the user had to join in order to be eligible for the giveaway</p>
    * @var int|null
    */
    public ?int $additional_chat_count = null;

    /**
    * <p>*Optional*. The number of months the Telegram Premium subscription won from the giveaway will be active for</p>
    * @var int|null
    */
    public ?int $premium_subscription_month_count = null;

    /**
    * <p>*Optional*. Number of undistributed prizes</p>
    * @var int|null
    */
    public ?int $unclaimed_prize_count = null;

    /**
    * <p>*Optional*. *True*, if only users who had joined the chats after the giveaway started were eligible to win</p>
    * @var bool|null
    */
    public ?bool $only_new_members = null;

    /**
    * <p>*Optional*. *True*, if the giveaway was canceled because the payment for it was refunded</p>
    * @var bool|null
    */
    public ?bool $was_refunded = null;

    /**
    * <p>*Optional*. Description of additional giveaway prize</p>
    * @var string|null
    */
    public ?string $prize_description = null;



    public function __construct($data)
    {
        $this->chat = new Chat($data['chat']);

        $this->giveaway_message_id = $data['giveaway_message_id'];
        $this->winners_selection_date = $data['winners_selection_date'];
        $this->winner_count = $data['winner_count'];
        $this->winners = $data['winners'];
        if (isset($data['additional_chat_count'])){
            $this->additional_chat_count = $data['additional_chat_count'];
        }

        if (isset($data['premium_subscription_month_count'])){
            $this->premium_subscription_month_count = $data['premium_subscription_month_count'];
        }

        if (isset($data['unclaimed_prize_count'])){
            $this->unclaimed_prize_count = $data['unclaimed_prize_count'];
        }

        if (isset($data['only_new_members'])){
            $this->only_new_members = $data['only_new_members'];
        }

        if (isset($data['was_refunded'])){
            $this->was_refunded = $data['was_refunded'];
        }

        if (isset($data['prize_description'])){
            $this->prize_description = $data['prize_description'];
        }

    }
}