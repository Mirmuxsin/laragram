<?php

namespace Milly\Laragram\Types;

/**
* StarTransaction
 *
 *<p>*Optional*. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#startransaction
 */
class StarTransaction
{
    /**
    * <p>Unique identifier of the transaction. Coincides with the identifier of the original transaction for refund transactions. Coincides with *SuccessfulPayment.telegram\<em>payment\</em>charge\_id* for successful incoming payments from users.</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Integer amount of Telegram Stars transferred by the transaction</p>
    * @var int
    */
    public int $amount;

    /**
    * <p>*Optional*. The number of 1/1000000000 shares of Telegram Stars transferred by the transaction; from 0 to 999999999</p>
    * @var int|null
    */
    public ?int $nanostar_amount = null;

    /**
    * <p>Date the transaction was created in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>*Optional*. Source of an incoming transaction (e.g., a user purchasing goods or services, Fragment refunding a failed withdrawal). Only for incoming transactions</p>
    * @var TransactionPartner|null
    */
    public ?TransactionPartner $source = null;

    /**
    * <p>*Optional*. Receiver of an outgoing transaction (e.g., a user for a purchase refund, Fragment for a withdrawal). Only for outgoing transactions</p>
    * @var TransactionPartner|null
    */
    public ?TransactionPartner $receiver = null;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->amount = $data['amount'];
        if (isset($data['nanostar_amount'])){
            $this->nanostar_amount = $data['nanostar_amount'];
        }

        $this->date = $data['date'];
        if (isset($data['source'])){
            $this->source = new TransactionPartner($data['source']);
        }

        if (isset($data['receiver'])){
            $this->receiver = new TransactionPartner($data['receiver']);
        }

    }
}