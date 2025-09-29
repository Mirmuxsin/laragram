---
layout: default
title: deleteStickerFromSet
---

# deleteStickerFromSet

Use this method to delete a sticker from a set created by the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::deleteStickerFromSet($sticker);
```

## Parameters

- **$sticker** (`string`): File identifier of the sticker


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of deleteStickerFromSet
$result = Laragram::deleteStickerFromSet($sticker);

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
