---
layout: default
title: editUserStarSubscription
---

# editUserStarSubscription

Allows the bot to cancel or re-enable extension of a subscription paid in Telegram Stars. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::editUserStarSubscription($user_id, $telegram_payment_charge_id, $is_canceled);
```

## Parameters

- **$user_id** (`integer`): Identifier of the user whose subscription will be edited
- **$telegram_payment_charge_id** (`string`): Telegram payment identifier for the subscription
- **$is_canceled** (`bool`): Pass *True* to cancel extension of the user subscription; the subscription must be active up to the end of the current subscription period. Pass *False* to allow the user to re-enable a subscription that was previously canceled by the bot.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of editUserStarSubscription
$result = Laragram::editUserStarSubscription($user_id, $telegram_payment_charge_id, $is_canceled);

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
