<?php

namespace Milly\Laragram\Types;

/**
* Giveaway
 *
 *<p>*Optional*. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#giveaway
 */
class Giveaway
{
    /**
    * <p>The list of chats which the user must join to participate in the giveaway</p>
    * @var array
    */
    public array $chats;

    /**
    * <p>Point in time (Unix timestamp) when winners of the giveaway will be selected</p>
    * @var int
    */
    public int $winners_selection_date;

    /**
    * <p>The number of users which are supposed to be selected as winners of the giveaway</p>
    * @var int
    */
    public int $winner_count;

    /**
    * <p>*Optional*. *True*, if only users who join the chats after the giveaway started should be eligible to win</p>
    * @var bool|null
    */
    public ?bool $only_new_members = null;

    /**
    * <p>*Optional*. *True*, if the list of giveaway winners will be visible to everyone</p>
    * @var bool|null
    */
    public ?bool $has_public_winners = null;

    /**
    * <p>*Optional*. Description of additional giveaway prize</p>
    * @var string|null
    */
    public ?string $prize_description = null;

    /**
    * <p>*Optional*. A list of two-letter <a href="https://en.wikipedia.org/wiki/ISO<em>3166-1</em>alpha-2">ISO 3166-1 alpha-2</a> country codes indicating the countries from which eligible users for the giveaway must come. If empty, then all users can participate in the giveaway. Users with a phone number that was bought on Fragment can always participate in giveaways.</p>
    * @var array|null
    */
    public ?array $country_codes = null;

    /**
    * <p>*Optional*. The number of Telegram Stars to be split between giveaway winners; for Telegram Star giveaways only</p>
    * @var int|null
    */
    public ?int $prize_star_count = null;

    /**
    * <p>*Optional*. The number of months the Telegram Premium subscription won from the giveaway will be active for; for Telegram Premium giveaways only</p>
    * @var int|null
    */
    public ?int $premium_subscription_month_count = null;



    public function __construct($data)
    {
        $this->chats = $data['chats'];
        $this->winners_selection_date = $data['winners_selection_date'];
        $this->winner_count = $data['winner_count'];
        if (isset($data['only_new_members'])){
            $this->only_new_members = $data['only_new_members'];
        }

        if (isset($data['has_public_winners'])){
            $this->has_public_winners = $data['has_public_winners'];
        }

        if (isset($data['prize_description'])){
            $this->prize_description = $data['prize_description'];
        }

        if (isset($data['country_codes'])){
            $this->country_codes = $data['country_codes'];
        }

        if (isset($data['prize_star_count'])){
            $this->prize_star_count = $data['prize_star_count'];
        }

        if (isset($data['premium_subscription_month_count'])){
            $this->premium_subscription_month_count = $data['premium_subscription_month_count'];
        }

    }
}