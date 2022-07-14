<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* createInvoiceLink
 *
 *Use this method to create a link for an invoice. Returns the created invoice link as *String* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#createinvoicelink
 * @abstract
 */
abstract class createInvoiceLink extends Laragram
{
    /**
     * @var string title *(required: true)**(min length: 1)**(max length: 1)* Product name, 1-32 characters
     * @var string description *(required: true)**(min length: 1)**(max length: 1)* Product description, 1-255 characters
     * @var string payload *(required: true)* Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use for your internal processes.
     * @var string provider_token *(required: true)* Payment provider token, obtained via [BotFather](https://t.me/botfather)
     * @var string currency *(required: true)* Three-letter ISO 4217 currency code, see [more on currencies](https://core.telegram.org/bots/payments#supported-currencies)
     * @var array prices *(required: true)* Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.)
     * @var integer max_tip_amount *(default: 0)* The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0
     * @var array suggested_tip_amounts  A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
     * @var string provider_data  JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
     * @var string photo_url  URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
     * @var integer photo_size  Photo size in bytes
     * @var integer photo_width  Photo width
     * @var integer photo_height  Photo height
     * @var bool need_name  Pass *True*, if you require the user's full name to complete the order
     * @var bool need_phone_number  Pass *True*, if you require the user's phone number to complete the order
     * @var bool need_email  Pass *True*, if you require the user's email address to complete the order
     * @var bool need_shipping_address  Pass *True*, if you require the user's shipping address to complete the order
     * @var bool send_phone_number_to_provider  Pass *True*, if the user's phone number should be sent to the provider
     * @var bool send_email_to_provider  Pass *True*, if the user's email address should be sent to the provider
     * @var bool is_flexible  Pass *True*, if the final price depends on the shipping method
     * 
     * @access createInvoiceLink
     */
     public static function createInvoiceLink () {
        return true;
     }
}