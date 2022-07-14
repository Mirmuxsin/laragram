<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InputInvoiceMessageContent
 *
 *Represents the [content](https://core.telegram.org/bots/api/#inputmessagecontent) of an invoice message to be sent as the result of an inline query.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputinvoicemessagecontent
 */
class InputInvoiceMessageContent extends Laragram
{
    /**
    * Product name, 1-32 characters
    * @var string
    */
    public string $title;

    /**
    * Product description, 1-255 characters
    * @var string
    */
    public string $description;

    /**
    * Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
    * @var string
    */
    public string $payload;

    /**
    * Payment provider token, obtained via [@BotFather](https://t.me/botfather)
    * @var string
    */
    public string $provider_token;

    /**
    * Three-letter ISO 4217 currency code, see [more on currencies](https://core.telegram.org/bots/payments#supported-currencies)
    * @var string
    */
    public string $currency;

    /**
    * Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
    * @var array
    */
    public array $prices;

    /**
    * *Optional*. The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
    * @var int|null
    */
    public ?int $max_tip_amount = null;

    /**
    * *Optional*. A JSON-serialized array of suggested amounts of tip in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
    * @var array|null
    */
    public ?array $suggested_tip_amounts = null;

    /**
    * *Optional*. A JSON-serialized object for data about the invoice, which will be shared with the payment provider. A detailed description of the required fields should be provided by the payment provider.
    * @var string|null
    */
    public ?string $provider_data = null;

    /**
    * *Optional*. URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
    * @var string|null
    */
    public ?string $photo_url = null;

    /**
    * *Optional*. Photo size in bytes
    * @var int|null
    */
    public ?int $photo_size = null;

    /**
    * *Optional*. Photo width
    * @var int|null
    */
    public ?int $photo_width = null;

    /**
    * *Optional*. Photo height
    * @var int|null
    */
    public ?int $photo_height = null;

    /**
    * *Optional*. Pass *True*, if you require the user's full name to complete the order
    * @var bool|null
    */
    public ?bool $need_name = null;

    /**
    * *Optional*. Pass *True*, if you require the user's phone number to complete the order
    * @var bool|null
    */
    public ?bool $need_phone_number = null;

    /**
    * *Optional*. Pass *True*, if you require the user's email address to complete the order
    * @var bool|null
    */
    public ?bool $need_email = null;

    /**
    * *Optional*. Pass *True*, if you require the user's shipping address to complete the order
    * @var bool|null
    */
    public ?bool $need_shipping_address = null;

    /**
    * *Optional*. Pass *True*, if the user's phone number should be sent to provider
    * @var bool|null
    */
    public ?bool $send_phone_number_to_provider = null;

    /**
    * *Optional*. Pass *True*, if the user's email address should be sent to provider
    * @var bool|null
    */
    public ?bool $send_email_to_provider = null;

    /**
    * *Optional*. Pass *True*, if the final price depends on the shipping method
    * @var bool|null
    */
    public ?bool $is_flexible = null;



    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->payload = $data['payload'];
        $this->provider_token = $data['provider_token'];
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