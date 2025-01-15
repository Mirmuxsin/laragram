<?php

namespace Milly\Laragram\Types;

/**
* TransactionPartnerAffiliateProgram
 *
 *<p>The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#transactionpartneraffiliateprogram
 */
class TransactionPartnerAffiliateProgram
{
    /**
    * <p>Type of the transaction partner, always “affiliate\_program”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>*Optional*. Information about the bot that sponsored the affiliate program</p>
    * @var User|null
    */
    public ?User $sponsor_user = null;

    /**
    * <p>The number of Telegram Stars received by the bot for each 1000 Telegram Stars received by the affiliate program sponsor from referred users</p>
    * @var int
    */
    public int $commission_per_mille;



    public function __construct($data)
    {
        $this->type = $data['type'];
        if (isset($data['sponsor_user'])){
            $this->sponsor_user = new User($data['sponsor_user']);
        }

        $this->commission_per_mille = $data['commission_per_mille'];
    }
}