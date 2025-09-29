---
layout: default
title: close
---

# close

Use this method to close the bot instance before moving it from one local server to another. You need to delete the webhook before calling this method to ensure that the bot isn't launched again after server restart. The method will return error 429 in the first 10 minutes after the bot is launched. Returns *True* on success. Requires no parameters.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::close();
```

## Parameters



## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of close
$result = Laragram::close();

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
