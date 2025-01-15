<?php

namespace Milly\Laragram\Types;

/**
* InputInvoiceMessageContent
 *
 *<p>*Optional*. Pass *True* if the final price depends on the shipping method. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputinvoicemessagecontent
 */
class InputInvoiceMessageContent
{
    /**
    * <p>Product name, 1-32 characters</p>
    * @var string
    */
    public string $title;

    /**
    * <p>Product description, 1-255 characters</p>
    * @var string
    */
    public string $description;

    /**
    * <p>Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.</p>
    * @var string
    */
    public string $payload;

    /**
    * <p>*Optional*. Payment provider token, obtained via <a href="https://t.me/botfather">@BotFather</a>. Pass an empty string for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var string|null
    */
    public ?string $provider_token = null;

    /**
    * <p>Three-letter ISO 4217 currency code, see <a href="https://core.telegram.org/bots/payments#supported-currencies">more on currencies</a>. Pass “XTR” for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var string
    */
    public string $currency;

    /**
    * <p>Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var array
    */
    public array $prices;

    /**
    * <p>*Optional*. The maximum accepted amount for tips in the *smallest units* of the currency (integer, <strong>not</strong> float/double). For example, for a maximum tip of `US$ 1.45` pass `max<em>tip</em>amount = 145`. See the *exp* parameter in <a href="https://core.telegram.org/bots/payments/currencies.json">currencies.json</a>, it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var int|null
    */
    public ?int $max_tip_amount = null;

    /**
    * <p>*Optional*. A JSON-serialized array of suggested amounts of tip in the *smallest units* of the currency (integer, <strong>not</strong> float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\<em>tip\</em>amount*.</p>
    * @var array|null
    */
    public ?array $suggested_tip_amounts = null;

    /**
    * <p>*Optional*. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.</p>
    * @var string|null
    */
    public ?string $provider_data = null;

    /**
    * <p>*Optional*. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.</p>
    * @var string|null
    */
    public ?string $photo_url = null;

    /**
    * <p>*Optional*. Photo size in bytes</p>
    * @var int|null
    */
    public ?int $photo_size = null;

    /**
    * <p>*Optional*. Photo width</p>
    * @var int|null
    */
    public ?int $photo_width = null;

    /**
    * <p>*Optional*. Photo height</p>
    * @var int|null
    */
    public ?int $photo_height = null;

    /**
    * <p>*Optional*. Pass *True* if you require the user's full name to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var bool|null
    */
    public ?bool $need_name = null;

    /**
    * <p>*Optional*. Pass *True* if you require the user's phone number to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var bool|null
    */
    public ?bool $need_phone_number = null;

    /**
    * <p>*Optional*. Pass *True* if you require the user's email address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var bool|null
    */
    public ?bool $need_email = null;

    /**
    * <p>*Optional*. Pass *True* if you require the user's shipping address to complete the order. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var bool|null
    */
    public ?bool $need_shipping_address = null;

    /**
    * <p>*Optional*. Pass *True* if the user's phone number should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var bool|null
    */
    public ?bool $send_phone_number_to_provider = null;

    /**
    * <p>*Optional*. Pass *True* if the user's email address should be sent to the provider. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var bool|null
    */
    public ?bool $send_email_to_provider = null;

    /**
    * <p>*Optional*. Pass *True* if the final price depends on the shipping method. Ignored for payments in <a href="https://t.me/BotNews/90">Telegram Stars</a>.</p>
    * @var bool|null
    */
    public ?bool $is_flexible = null;



    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->payload = $data['payload'];
        if (isset($data['provider_token'])){
            $this->provider_token = $data['provider_token'];
        }

        $this->currency = $data['currency'];
        $this->prices = $data['prices'];
        if (isset($data['max_tip_amount'])){
            $this->max_tip_amount = $data['max_tip_amount'];
        }

        if (isset($data['suggested_tip_amounts'])){
            $this->suggested_tip_amounts = $data['suggested_tip_amounts'];
        }

        if (isset($data['provider_data'])){
            $this->provider_data = $data['provider_data'];
        }

        if (isset($data['photo_url'])){
            $this->photo_url = $data['photo_url'];
        }

        if (isset($data['photo_size'])){
            $this->photo_size = $data['photo_size'];
        }

        if (isset($data['photo_width'])){
            $this->photo_width = $data['photo_width'];
        }

        if (isset($data['photo_height'])){
            $this->photo_height = $data['photo_height'];
        }

        if (isset($data['need_name'])){
            $this->need_name = $data['need_name'];
        }

        if (isset($data['need_phone_number'])){
            $this->need_phone_number = $data['need_phone_number'];
        }

        if (isset($data['need_email'])){
            $this->need_email = $data['need_email'];
        }

        if (isset($data['need_shipping_address'])){
            $this->need_shipping_address = $data['need_shipping_address'];
        }

        if (isset($data['send_phone_number_to_provider'])){
            $this->send_phone_number_to_provider = $data['send_phone_number_to_provider'];
        }

        if (isset($data['send_email_to_provider'])){
            $this->send_email_to_provider = $data['send_email_to_provider'];
        }

        if (isset($data['is_flexible'])){
            $this->is_flexible = $data['is_flexible'];
        }

    }
}