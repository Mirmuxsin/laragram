<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* Invoice
 *
 *This object contains basic information about an invoice.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#invoice
 */
class Invoice extends Laragram
{
    /**
    * Product name
    * @var string
    */
    public string $title;

    /**
    * Product description
    * @var string
    */
    public string $description;

    /**
    * Unique bot deep-linking parameter that can be used to generate this invoice
    * @var string
    */
    public string $start_parameter;

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



    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->start_parameter = $data['start_parameter'];
        $this->currency = $data['currency'];
        $this->total_amount = $data['total_amount'];
    }
}