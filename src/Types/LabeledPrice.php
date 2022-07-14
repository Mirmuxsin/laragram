<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* LabeledPrice
 *
 *This object represents a portion of the price for goods or services.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#labeledprice
 */
class LabeledPrice extends Laragram
{
    /**
    * Portion label
    * @var string
    */
    public string $label;

    /**
    * Price of the product in the *smallest units* of the [currency](https://core.telegram.org/bots/payments#supported-currencies) (integer, **not** float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).
    * @var int
    */
    public int $amount;



    public function __construct($data)
    {
        $this->label = $data['label'];
        $this->amount = $data['amount'];
    }
}