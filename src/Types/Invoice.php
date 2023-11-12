<?php

namespace Milly\Laragram\Types;


/**
* Invoice
 *
 *<p>Total price in the *smallest units* of the currency (integer, <strong>not</strong> float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#invoice
 */
class Invoice
{
    /**
    * <p>Product name</p>
    * @var string
    */
    public string $title;

    /**
    * <p>Product description</p>
    * @var string
    */
    public string $description;

    /**
    * <p>Unique bot deep-linking parameter that can be used to generate this invoice</p>
    * @var string
    */
    public string $start_parameter;

    /**
    * <p>Three-letter ISO 4217 <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> code</p>
    * @var string
    */
    public string $currency;

    /**
    * <p>Total price in the *smallest units* of the currency (integer, <strong>not</strong> float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).</p>
    * @var int
    */
    public int $total_amount;



    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->start_parameter = $data['start_parameter'];
        $this->currency = $data['currency'];
        $this->total_amount = $data['total_amount'];
    }
}