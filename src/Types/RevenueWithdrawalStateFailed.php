<?php

namespace Milly\Laragram\Types;

/**
* RevenueWithdrawalStateFailed
 *
 *<p>Type of the state, always “failed”</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#revenuewithdrawalstatefailed
 */
class RevenueWithdrawalStateFailed
{
    /**
    * <p>Type of the state, always “failed”</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}