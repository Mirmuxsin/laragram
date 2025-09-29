---
layout: default
title: setCustomEmojiStickerSetThumbnail
---

# setCustomEmojiStickerSetThumbnail

Use this method to set the thumbnail of a custom emoji sticker set. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setCustomEmojiStickerSetThumbnail($name, $custom_emoji_id = null);
```

## Parameters

- **$name** (`string`): Sticker set name
- **$custom_emoji_id** (`string|null`): Custom emoji identifier of a sticker from the sticker set; pass an empty string to drop the thumbnail and use the first sticker as the thumbnail.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setCustomEmojiStickerSetThumbnail
$result = Laragram::setCustomEmojiStickerSetThumbnail($name, $custom_emoji_id = null);

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
