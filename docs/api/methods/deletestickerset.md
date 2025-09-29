---
layout: default
title: deleteStickerSet
---

# deleteStickerSet

Use this method to delete a sticker set that was created by the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::deleteStickerSet($name);
```

## Parameters

- **$name** (`string`): Sticker set name


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of deleteStickerSet
$result = Laragram::deleteStickerSet($name);

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
