<?php

namespace Milly\Laragram\Types;

/**
* TransactionPartnerTelegramAds
 *
 *<p>Describes a withdrawal transaction to the Telegram Ads platform.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#transactionpartnertelegramads
 */
class TransactionPartnerTelegramAds
{
    /**
    * <p>Type of the transaction partner, always “telegram\_ads”</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}