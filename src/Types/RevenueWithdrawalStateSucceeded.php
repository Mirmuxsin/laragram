<?php

namespace Milly\Laragram\Types;

/**
* RevenueWithdrawalStateSucceeded
 *
 *<p>An HTTPS URL that can be used to see transaction details</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#revenuewithdrawalstatesucceeded
 */
class RevenueWithdrawalStateSucceeded
{
    /**
    * <p>Type of the state, always “succeeded”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Date the withdrawal was completed in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>An HTTPS URL that can be used to see transaction details</p>
    * @var string
    */
    public string $url;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->date = $data['date'];
        $this->url = $data['url'];
    }
}