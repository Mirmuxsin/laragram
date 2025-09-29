---
layout: default
title: createNewStickerSet
---

# createNewStickerSet

Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::createNewStickerSet($user_id, $name, $title, $stickers, $sticker_type = null, $needs_repainting = null);
```

## Parameters

- **$user_id** (`integer`): User identifier of created sticker set owner
- **$name** (`string`): Short name of sticker set, to be used in `t.me/addstickers/` URLs (e.g., *animals*). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in `"_by_<bot_username>"`. `<bot_username>` is case insensitive. 1-64 characters.
- **$title** (`string`): Sticker set title, 1-64 characters
- **$stickers** (`array`): A JSON-serialized list of 1-50 initial stickers to be added to the sticker set
- **$sticker_type** (`string|null`): Type of stickers in the set, pass “regular”, “mask”, or “custom\_emoji”. By default, a regular sticker set is created.
- **$needs_repainting** (`bool|null`): Pass *True* if stickers in the sticker set must be repainted to the color of text when used in messages, the accent color if used as emoji status, white on chat photos, or another appropriate color based on context; for custom emoji sticker sets only


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of createNewStickerSet
$result = Laragram::createNewStickerSet($user_id, $name, $title, $stickers, $sticker_type = null, $needs_repainting = null);

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
