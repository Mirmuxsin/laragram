---
layout: default
title: addStickerToSet
---

# addStickerToSet

Use this method to add a new sticker to a set created by the bot. Emoji sticker sets can have up to 200 stickers. Other sticker sets can have up to 120 stickers. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::addStickerToSet($user_id, $name, $sticker);
```

## Parameters

- **$user_id** (`integer`): User identifier of sticker set owner
- **$name** (`string`): Sticker set name
- **$sticker** (`InputSticker`): A JSON-serialized object with information about the added sticker. If exactly the same sticker had already been added to the set, then the set isn't changed.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of addStickerToSet
$result = Laragram::addStickerToSet($user_id, $name, $sticker);

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
