<?php

namespace Milly\Laragram\Types;

/**
* StarTransactions
 *
 *<p>The list of transactions</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#startransactions
 */
class StarTransactions
{
    /**
    * <p>The list of transactions</p>
    * @var array
    */
    public array $transactions;



    public function __construct($data)
    {
        $this->transactions = $data['transactions'];
    }
}