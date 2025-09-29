---
layout: default
title: setStickerKeywords
---

# setStickerKeywords

Use this method to change search keywords assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setStickerKeywords($sticker, $keywords = null);
```

## Parameters

- **$sticker** (`string`): File identifier of the sticker
- **$keywords** (`array|null`): A JSON-serialized list of 0-20 search keywords for the sticker with total length of up to 64 characters


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setStickerKeywords
$result = Laragram::setStickerKeywords($sticker, $keywords = null);

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
