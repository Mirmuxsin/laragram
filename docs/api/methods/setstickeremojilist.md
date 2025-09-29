---
layout: default
title: setStickerEmojiList
---

# setStickerEmojiList

Use this method to change the list of emoji assigned to a regular or custom emoji sticker. The sticker must belong to a sticker set created by the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setStickerEmojiList($sticker, $emoji_list);
```

## Parameters

- **$sticker** (`string`): File identifier of the sticker
- **$emoji_list** (`array`): A JSON-serialized list of 1-20 emoji associated with the sticker


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setStickerEmojiList
$result = Laragram::setStickerEmojiList($sticker, $emoji_list);

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
