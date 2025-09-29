---
layout: default
title: getAvailableGifts
---

# getAvailableGifts

Returns the list of gifts that can be sent by the bot to users and channel chats. Requires no parameters. Returns a [Gifts](https://core.telegram.org/bots/api/#gifts) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getAvailableGifts();
```

## Parameters



## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getAvailableGifts
$result = Laragram::getAvailableGifts();

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
