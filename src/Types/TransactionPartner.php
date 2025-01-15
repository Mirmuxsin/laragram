<?php

namespace Milly\Laragram\Types;

/**
* TransactionPartner
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#transactionpartner
 */
class TransactionPartner
{


    public TransactionPartnerUser $transactionPartnerUser;

    public TransactionPartnerAffiliateProgram $transactionPartnerAffiliateProgram;

    public TransactionPartnerFragment $transactionPartnerFragment;

    public TransactionPartnerTelegramAds $transactionPartnerTelegramAds;

    public TransactionPartnerTelegramApi $transactionPartnerTelegramApi;

    public TransactionPartnerOther $transactionPartnerOther;



    public function __construct($data)
    {
        $this->transactionPartnerUser = new TransactionPartnerUser($data);
        $this->transactionPartnerAffiliateProgram = new TransactionPartnerAffiliateProgram($data);
        $this->transactionPartnerFragment = new TransactionPartnerFragment($data);
        $this->transactionPartnerTelegramAds = new TransactionPartnerTelegramAds($data);
        $this->transactionPartnerTelegramApi = new TransactionPartnerTelegramApi($data);
        $this->transactionPartnerOther = new TransactionPartnerOther($data);
    }
}