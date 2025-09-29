---
layout: default
title: sendInvoice
---

# sendInvoice

Use this method to send invoices. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::sendInvoice($chat_id, $message_thread_id = null, $title, $description, $payload, $provider_token = null, $currency, $prices, $max_tip_amount = null, $suggested_tip_amounts = null, $start_parameter = null, $provider_data = null, $photo_url = null, $photo_size = null, $photo_width = null, $photo_height = null, $need_name = null, $need_phone_number = null, $need_email = null, $need_shipping_address = null, $send_phone_number_to_provider = null, $send_email_to_provider = null, $is_flexible = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null, $reply_markup = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_thread_id** (`integer|null`): Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
- **$title** (`string`): Product name, 1-32 characters
- **$description** (`string`): Product description, 1-255 characters
- **$payload** (`string`): Bot-defined invoice payload, 1-128 bytes. This will not be displayed to the user, use it for your internal processes.
- **$provider_token** (`string|null`): Payment provider token, obtained via [@BotFather](https://t.me/botfather). Pass an empty string for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$currency** (`string`): Three-letter ISO 4217 currency code, see [more on currencies](https://core.telegram.org/bots/payments#supported-currencies). Pass “XTR” for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$prices** (`array`): Price breakdown, a JSON-serialized list of components (e.g. product price, tax, discount, delivery cost, delivery tax, bonus, etc.). Must contain exactly one item for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$max_tip_amount** (`integer|null`): The maximum accepted amount for tips in the *smallest units* of the currency (integer, **not** float/double). For example, for a maximum tip of `US$ 1.45` pass `max_tip_amount = 145`. See the *exp* parameter in [currencies.json](https://core.telegram.org/bots/payments/currencies.json), it shows the number of digits past the decimal point for each currency (2 for the majority of currencies). Defaults to 0. Not supported for payments in [Telegram Stars](https://t.me/BotNews/90).
- **$suggested_tip_amounts** (`array|null`): A JSON-serialized array of suggested amounts of tips in the *smallest units* of the currency (integer, **not** float/double). At most 4 suggested tip amounts can be specified. The suggested tip amounts must be positive, passed in a strictly increased order and must not exceed *max\_tip\_amount*.
- **$start_parameter** (`string|null`): Unique deep-linking parameter. If left empty, **forwarded copies** of the sent message will have a *Pay* button, allowing multiple users to pay directly from the forwarded message, using the same invoice. If non-empty, forwarded copies of the sent message will have a *URL* button with a deep link to the bot (instead of a *Pay* button), with the value used as the start parameter
- **$provider_data** (`string|null`): JSON-serialized data about the invoice, which will be shared with the payment provider. A detailed description of required fields should be provided by the payment provider.
- **$photo_url** (`string|null`): URL of the product photo for the invoice. Can be a photo of the goods or a marketing image for a service. People like it better when they see what they are paying for.
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
- **$disable_notification** (`bool|null`): Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
- **$protect_content** (`bool|null`): Protects the contents of the sent message from forwarding and saving
- **$allow_paid_broadcast** (`bool|null`): Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
- **$message_effect_id** (`string|null`): Unique identifier of the message effect to be added to the message; for private chats only
- **$reply_parameters** (`ReplyParameters|null`): Description of the message to reply to
- **$reply_markup** (`InlineKeyboardMarkup|null`): A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards). If empty, one 'Pay `total price`' button will be shown. If not empty, the first button must be a Pay button.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of sendInvoice
$result = Laragram::sendInvoice($chat_id, $message_thread_id = null, $title, $description, $payload, $provider_token = null, $currency, $prices, $max_tip_amount = null, $suggested_tip_amounts = null, $start_parameter = null, $provider_data = null, $photo_url = null, $photo_size = null, $photo_width = null, $photo_height = null, $need_name = null, $need_phone_number = null, $need_email = null, $need_shipping_address = null, $send_phone_number_to_provider = null, $send_email_to_provider = null, $is_flexible = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null, $reply_markup = null);

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
