---
layout: default
title: deleteWebhook
---

# deleteWebhook

Use this method to remove webhook integration if you decide to switch back to [getUpdates](https://core.telegram.org/bots/api/#getupdates). Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::deleteWebhook($drop_pending_updates = null);
```

## Parameters

- **$drop_pending_updates** (`bool|null`): Pass *True* to drop all pending updates


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of deleteWebhook
$result = Laragram::deleteWebhook($drop_pending_updates = null);

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
