---
layout: default
title: getMe
---

# getMe

A simple method for testing your bot's authentication token. Requires no parameters. Returns basic information about the bot in form of a [User](https://core.telegram.org/bots/api/#user) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getMe();
```

## Parameters



## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getMe
$result = Laragram::getMe();

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
