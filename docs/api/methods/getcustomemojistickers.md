---
layout: default
title: getCustomEmojiStickers
---

# getCustomEmojiStickers

Use this method to get information about custom emoji stickers by their identifiers. Returns an Array of [Sticker](https://core.telegram.org/bots/api/#sticker) objects.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getCustomEmojiStickers($custom_emoji_ids);
```

## Parameters

- **$custom_emoji_ids** (`array`): A JSON-serialized list of custom emoji identifiers. At most 200 custom emoji identifiers can be specified.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getCustomEmojiStickers
$result = Laragram::getCustomEmojiStickers($custom_emoji_ids);

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
