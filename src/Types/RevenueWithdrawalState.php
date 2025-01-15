<?php

namespace Milly\Laragram\Types;

/**
* RevenueWithdrawalState
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#revenuewithdrawalstate
 */
class RevenueWithdrawalState
{


    public RevenueWithdrawalStatePending $revenueWithdrawalStatePending;

    public RevenueWithdrawalStateSucceeded $revenueWithdrawalStateSucceeded;

    public RevenueWithdrawalStateFailed $revenueWithdrawalStateFailed;



    public function __construct($data)
    {
        $this->revenueWithdrawalStatePending = new RevenueWithdrawalStatePending($data);
        $this->revenueWithdrawalStateSucceeded = new RevenueWithdrawalStateSucceeded($data);
        $this->revenueWithdrawalStateFailed = new RevenueWithdrawalStateFailed($data);
    }
}