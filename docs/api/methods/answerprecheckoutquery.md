---
layout: default
title: answerPreCheckoutQuery
---

# answerPreCheckoutQuery

Once the user has confirmed their payment and shipping details, the Bot API sends the final confirmation in the form of an [Update](https://core.telegram.org/bots/api/#update) with the field *pre\_checkout\_query*. Use this method to respond to such pre-checkout queries. On success, *True* is returned. **Note:** The Bot API must receive an answer within 10 seconds after the pre-checkout query was sent.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::answerPreCheckoutQuery($pre_checkout_query_id, $ok, $error_message = null);
```

## Parameters

- **$pre_checkout_query_id** (`string`): Unique identifier for the query to be answered
- **$ok** (`bool`): Specify *True* if everything is alright (goods are available, etc.) and the bot is ready to proceed with the order. Use *False* if there are any problems.
- **$error_message** (`string|null`): Required if *ok* is *False*. Error message in human readable form that explains the reason for failure to proceed with the checkout (e.g. "Sorry, somebody just bought the last of our amazing black T-shirts while you were busy filling out your payment details. Please choose a different color or garment!"). Telegram will display this message to the user.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of answerPreCheckoutQuery
$result = Laragram::answerPreCheckoutQuery($pre_checkout_query_id, $ok, $error_message = null);

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
