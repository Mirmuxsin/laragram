<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* PreCheckoutQuery
 *
 *This object contains information about an incoming pre-checkout query.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#precheckoutquery
 */
class PreCheckoutQuery extends Laragram
{
    /**
    * Unique query identifier
    * @var string
    */
    public string $id;

    /**
    * User who sent the query
    * @var User
    */
    public User $from;

    /**
    * Three-letter ISO 4217 [currency](https://core.telegram.org/bots/payments#supported-currencies) code
    * @var string
    */
    public string $currency;

    /**
    * Total price in the *smallest units* of the currency (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
    * @var int
    */
    public int $total_amount;

    /**
    * Bot specified invoice payload
    * @var string
    */
    public string $invoice_payload;

    /**
    * *Optional*. Identifier of the shipping option chosen by the user
    * @var string|null
    */
    public ?string $shipping_option_id = null;

    /**
    * *Optional*. Order information provided by the user
    * @var OrderInfo|null
    */
    public ?OrderInfo $order_info = null;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->from = new User($data['from']);

        $this->currency = $data['currency'];
        $this->total_amount = $data['total_amount'];
        $this->invoice_payload = $data['invoice_payload'];
        if (isset($data['shipping_option_id'])){
            $this->shipping_option_id = $data['shipping_option_id'];
        }

        if (isset($data['order_info'])){
            $this->order_info = new OrderInfo($data['order_info']);
        }

    }
}