---
layout: default
title: setStickerMaskPosition
---

# setStickerMaskPosition

Use this method to change the [mask position](https://core.telegram.org/bots/api/#maskposition) of a mask sticker. The sticker must belong to a sticker set that was created by the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setStickerMaskPosition($sticker, $mask_position = null);
```

## Parameters

- **$sticker** (`string`): File identifier of the sticker
- **$mask_position** (`MaskPosition|null`): A JSON-serialized object with the position where the mask should be placed on faces. Omit the parameter to remove the mask position.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setStickerMaskPosition
$result = Laragram::setStickerMaskPosition($sticker, $mask_position = null);

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
