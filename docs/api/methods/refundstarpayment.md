---
layout: default
title: refundStarPayment
---

# refundStarPayment

Refunds a successful payment in [Telegram Stars](https://t.me/BotNews/90). Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::refundStarPayment($user_id, $telegram_payment_charge_id);
```

## Parameters

- **$user_id** (`integer`): Identifier of the user whose payment will be refunded
- **$telegram_payment_charge_id** (`string`): Telegram payment identifier


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of refundStarPayment
$result = Laragram::refundStarPayment($user_id, $telegram_payment_charge_id);

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
