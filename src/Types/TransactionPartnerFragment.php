<?php

namespace Milly\Laragram\Types;

/**
* TransactionPartnerFragment
 *
 *<p>*Optional*. State of the transaction if the transaction is outgoing</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#transactionpartnerfragment
 */
class TransactionPartnerFragment
{
    /**
    * <p>Type of the transaction partner, always “fragment”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>*Optional*. State of the transaction if the transaction is outgoing</p>
    * @var RevenueWithdrawalState|null
    */
    public ?RevenueWithdrawalState $withdrawal_state = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        if (isset($data['withdrawal_state'])){
            $this->withdrawal_state = new RevenueWithdrawalState($data['withdrawal_state']);
        }

    }
}