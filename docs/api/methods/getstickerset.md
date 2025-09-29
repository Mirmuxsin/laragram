---
layout: default
title: getStickerSet
---

# getStickerSet

Use this method to get a sticker set. On success, a [StickerSet](https://core.telegram.org/bots/api/#stickerset) object is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getStickerSet($name);
```

## Parameters

- **$name** (`string`): Name of the sticker set


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getStickerSet
$result = Laragram::getStickerSet($name);

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
