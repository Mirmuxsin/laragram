<?php

namespace Milly\Laragram\Types;

/**
* LabeledPrice
 *
 *<p>Price of the product in the *smallest units* of the <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> (integer, <strong>not</strong> float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#labeledprice
 */
class LabeledPrice
{
    /**
    * <p>Portion label</p>
    * @var string
    */
    public string $label;

    /**
    * <p>Price of the product in the *smallest units* of the <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> (integer, <strong>not</strong> float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).</p>
    * @var int
    */
    public int $amount;



    public function __construct($data)
    {
        $this->label = $data['label'];
        $this->amount = $data['amount'];
    }
}