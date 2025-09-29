---
layout: default
title: createInvoiceLink
---

# createInvoiceLink

Use this method to create a link for an invoice. Returns the created invoice link as *String* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::createInvoiceLink($business_connection_id = null, $title, $description, $payload, $provider_token = null, $currency, $prices, $subscription_period = null, $max_tip_amount = null, $suggested_tip_amounts = null, $provider_data = null, $photo_url = null, $photo_size = null, $photo_width = null, $photo_height = null, $need_name = null, $need_phone_number = null, $need_email = null, $need_shipping_address = null, $send_phone_number_to_provider = null, $send_email_to_provider = null, $is_flexible = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the link will be created. For payments in [Telegram Stars](https://t.me/BotNews/90) only.
- **$title** (`string`): Product name, 1-32 characters
- **$description** (`string`): Product description, 1-255 characters
- **$payload** (`string`): Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
- **$provider_token** (`string|null`): Payment provider token, obtained via [@BotFather](https://t.me/botfather). Pass an empty string for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$currency** (`string`): Three-letter ISO 4217 currency code, see [more on currencies](https://core.telegram.org/bots/payments#supported-currencies). Pass “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$prices** (`array`): Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$subscription_period** (`integer|null`): The number of seconds the subscription will be active for before the next payment. The currency must be set to “XTR” (Telegram Stars) if the parameter is used. Currently, it must always be 2592000 (30 days) if specified. Any number of subscriptions can be active for a given bot at the same time, including multiple concurrent subscriptions from the same user. Subscription price must no exceed 2500 Telegram Stars.
- **$max_tip_amount** (`integer|null`): The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$suggested_tip_amounts** (`array|null`): A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
- **$provider_data** (`string|null`): JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
- **$photo_url** (`string|null`): URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service.
- **$photo_size** (`integer|null`): Photo size in bytes
- **$photo_width** (`integer|null`): Photo width
- **$photo_height** (`integer|null`): Photo height
- **$need_name** (`bool|null`): Pass *True* if you require the user's full name to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$need_phone_number** (`bool|null`): Pass *True* if you require the user's phone number to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$need_email** (`bool|null`): Pass *True* if you require the user's email address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$need_shipping_address** (`bool|null`): Pass *True* if you require the user's shipping address to complete the order. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$send_phone_number_to_provider** (`bool|null`): Pass *True* if the user's phone number should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$send_email_to_provider** (`bool|null`): Pass *True* if the user's email address should be sent to the provider. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$is_flexible** (`bool|null`): Pass *True* if the final price depends on the shipping method. Ignored for payments in [Telegram Stars](https://t.me/BotNews/90).


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of createInvoiceLink
$result = Laragram::createInvoiceLink($business_connection_id = null, $title, $description, $payload, $provider_token = null, $currency, $prices, $subscription_period = null, $max_tip_amount = null, $suggested_tip_amounts = null, $provider_data = null, $photo_url = null, $photo_size = null, $photo_width = null, $photo_height = null, $need_name = null, $need_phone_number = null, $need_email = null, $need_shipping_address = null, $send_phone_number_to_provider = null, $send_email_to_provider = null, $is_flexible = null);

if ($result['ok']) {
    // Success
    $data = $result['result'];
} else {
    // Error
    $error = $result['description'];
}
```

---
*Generated for Telegram Bot API v8*
