---
layout: default
title: setStickerPositionInSet
---

# setStickerPositionInSet

Use this method to move a sticker in a set created by the bot to a specific position. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setStickerPositionInSet($sticker, $position);
```

## Parameters

- **$sticker** (`string`): File identifier of the sticker
- **$position** (`integer`): New sticker position in the set, zero-based


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setStickerPositionInSet
$result = Laragram::setStickerPositionInSet($sticker, $position);

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
