---
layout: default
title: getWebhookInfo
---

# getWebhookInfo

Use this method to get current webhook status. Requires no parameters. On success, returns a [WebhookInfo](https://core.telegram.org/bots/api/#webhookinfo) object. If the bot is using [getUpdates](https://core.telegram.org/bots/api/#getupdates), will return an object with the *url* field empty.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getWebhookInfo();
```

## Parameters



## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getWebhookInfo
$result = Laragram::getWebhookInfo();

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
