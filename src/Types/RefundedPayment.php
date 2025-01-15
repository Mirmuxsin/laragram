<?php

namespace Milly\Laragram\Types;

/**
* RefundedPayment
 *
 *<p>*Optional*. Provider payment identifier</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#refundedpayment
 */
class RefundedPayment
{
    /**
    * <p>Three-letter ISO 4217 <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> code, or “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>. Currently, always “XTR”</p>
    * @var string
    */
    public string $currency;

    /**
    * <p>Total refunded price in the *smallest units* of the currency (integer, <strong>not</strong> float/double). For example, for a price of `US$ 1.45`, `total_amount = 145`. See the *exp* parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).</p>
    * @var int
    */
    public int $total_amount;

    /**
    * <p>Bot-specified invoice payload</p>
    * @var string
    */
    public string $invoice_payload;

    /**
    * <p>Telegram payment identifier</p>
    * @var string
    */
    public string $telegram_payment_charge_id;

    /**
    * <p>*Optional*. Provider payment identifier</p>
    * @var string|null
    */
    public ?string $provider_payment_charge_id = null;



    public function __construct($data)
    {
        $this->currency = $data['currency'];
        $this->total_amount = $data['total_amount'];
        $this->invoice_payload = $data['invoice_payload'];
        $this->telegram_payment_charge_id = $data['telegram_payment_charge_id'];
        if (isset($data['provider_payment_charge_id'])){
            $this->provider_payment_charge_id = $data['provider_payment_charge_id'];
        }

    }
}