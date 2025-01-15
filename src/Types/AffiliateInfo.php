<?php

namespace Milly\Laragram\Types;

/**
* AffiliateInfo
 *
 *<p>*Optional*. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#affiliateinfo
 */
class AffiliateInfo
{
    /**
    * <p>*Optional*. The bot or the user that received an affiliate commission if it was received by a bot or a user</p>
    * @var User|null
    */
    public ?User $affiliate_user = null;

    /**
    * <p>*Optional*. The chat that received an affiliate commission if it was received by a chat</p>
    * @var Chat|null
    */
    public ?Chat $affiliate_chat = null;

    /**
    * <p>The number of Telegram Stars received by the affiliate for each 1000 Telegram Stars received by the bot from referred users</p>
    * @var int
    */
    public int $commission_per_mille;

    /**
    * <p>Integer amount of Telegram Stars received by the affiliate from the transaction, rounded to 0; can be negative for refunds</p>
    * @var int
    */
    public int $amount;

    /**
    * <p>*Optional*. The number of 1/1000000000 shares of Telegram Stars received by the affiliate; from -999999999 to 999999999; can be negative for refunds</p>
    * @var int|null
    */
    public ?int $nanostar_amount = null;



    public function __construct($data)
    {
        if (isset($data['affiliate_user'])){
            $this->affiliate_user = new User($data['affiliate_user']);
        }

        if (isset($data['affiliate_chat'])){
            $this->affiliate_chat = new Chat($data['affiliate_chat']);
        }

        $this->commission_per_mille = $data['commission_per_mille'];
        $this->amount = $data['amount'];
        if (isset($data['nanostar_amount'])){
            $this->nanostar_amount = $data['nanostar_amount'];
        }

    }
}