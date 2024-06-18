<?php

namespace Milly\Laragram\Types;


/**
* SuccessfulPayment
 *
 *<p>Provider payment identifier</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#successfulpayment
 */
class SuccessfulPayment
{
    /**
    * <p>Three-letter ISO 4217 <a href="https://core.telegram.org/bots/payments#supported-currencies">currency</a> code, or “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a></p>
    * @var string
    */
    public string $currency;

    /**
    * <p>Total price in the *smallest units* of the currency (integer, <strong>not</strong> float/double). For example, for a price of `US$ 1.45` pass `amount = 145`. See the *exp* parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies).</p>
    * @var int
    */
    public int $total_amount;

    /**
    * <p>Bot specified invoice payload</p>
    * @var string
    */
    public string $invoice_payload;

    /**
    * <p>*Optional*. Identifier of the shipping option chosen by the user</p>
    * @var string|null
    */
    public ?string $shipping_option_id = null;

    /**
    * <p>*Optional*. Order information provided by the user</p>
    * @var OrderInfo|null
    */
    public ?OrderInfo $order_info = null;

    /**
    * <p>Telegram payment identifier</p>
    * @var string
    */
    public string $telegram_payment_charge_id;

    /**
    * <p>Provider payment identifier</p>
    * @var string
    */
    public string $provider_payment_charge_id;



    public function __construct($data)
    {
        $this->currency = $data['currency'];
        $this->total_amount = $data['total_amount'];
        $this->invoice_payload = $data['invoice_payload'];
        if (isset($data['shipping_option_id'])){
            $this->shipping_option_id = $data['shipping_option_id'];
        }

        if (isset($data['order_info'])){
            $this->order_info = new OrderInfo($data['order_info']);
        }

        $this->telegram_payment_charge_id = $data['telegram_payment_charge_id'];
        $this->provider_payment_charge_id = $data['provider_payment_charge_id'];
    }
}