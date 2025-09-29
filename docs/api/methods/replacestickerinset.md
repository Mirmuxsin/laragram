---
layout: default
title: replaceStickerInSet
---

# replaceStickerInSet

Use this method to replace an existing sticker in a sticker set with a new one. The method is equivalent to calling [deleteStickerFromSet](https://core.telegram.org/bots/api/#deletestickerfromset), then [addStickerToSet](https://core.telegram.org/bots/api/#addstickertoset), then [setStickerPositionInSet](https://core.telegram.org/bots/api/#setstickerpositioninset). Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::replaceStickerInSet($user_id, $name, $old_sticker, $sticker);
```

## Parameters

- **$user_id** (`integer`): User identifier of the sticker set owner
- **$name** (`string`): Sticker set name
- **$old_sticker** (`string`): File identifier of the replaced sticker
- **$sticker** (`InputSticker`): A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set remains unchanged.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of replaceStickerInSet
$result = Laragram::replaceStickerInSet($user_id, $name, $old_sticker, $sticker);

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
