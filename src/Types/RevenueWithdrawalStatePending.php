<?php

namespace Milly\Laragram\Types;

/**
* RevenueWithdrawalStatePending
 *
 *<p>Type of the state, always “pending”</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#revenuewithdrawalstatepending
 */
class RevenueWithdrawalStatePending
{
    /**
    * <p>Type of the state, always “pending”</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}