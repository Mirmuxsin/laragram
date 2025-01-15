<?php

namespace Milly\Laragram\Types;

/**
* TransactionPartnerTelegramApi
 *
 *<p>The number of successful requests that exceeded regular limits and were therefore billed</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#transactionpartnertelegramapi
 */
class TransactionPartnerTelegramApi
{
    /**
    * <p>Type of the transaction partner, always “telegram\_api”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>The number of successful requests that exceeded regular limits and were therefore billed</p>
    * @var int
    */
    public int $request_count;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->request_count = $data['request_count'];
    }
}