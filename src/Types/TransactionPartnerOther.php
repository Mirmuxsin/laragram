<?php

namespace Milly\Laragram\Types;

/**
* TransactionPartnerOther
 *
 *<p>Type of the transaction partner, always “other”</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#transactionpartnerother
 */
class TransactionPartnerOther
{
    /**
    * <p>Type of the transaction partner, always “other”</p>
    * @var string
    */
    public string $type;



    public function __construct($data)
    {
        $this->type = $data['type'];
    }
}