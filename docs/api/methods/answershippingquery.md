---
layout: default
title: answerShippingQuery
---

# answerShippingQuery

If you sent an invoice requesting a shipping address and the parameter *is\_flexible* was specified, the Bot API will send an [Update](https://core.telegram.org/bots/api/#update) with a *shipping\_query* field to the bot. Use this method to reply to shipping queries. On success, *True* is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::answerShippingQuery($shipping_query_id, $ok, $shipping_options = null, $error_message = null);
```

## Parameters

- **$shipping_query_id** (`string`): Unique identifier for the query to be answered
- **$ok** (`bool`): Pass *True* if delivery to the specified address is possible and *False* if there are any problems (for example, if delivery to the specified address is not possible)
- **$shipping_options** (`array|null`): Required if *ok* is *True*. A JSON-serialized array of available shipping options.
- **$error_message** (`string|null`): Required if *ok* is *False*. Error message in human readable form that explains why it is impossible to complete the order (e.g. “Sorry, delivery to your desired address is unavailable”). Telegram will display this message to the user.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of answerShippingQuery
$result = Laragram::answerShippingQuery($shipping_query_id, $ok, $shipping_options = null, $error_message = null);

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
