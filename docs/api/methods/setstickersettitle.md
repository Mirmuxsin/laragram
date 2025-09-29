---
layout: default
title: setStickerSetTitle
---

# setStickerSetTitle

Use this method to set the title of a created sticker set. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setStickerSetTitle($name, $title);
```

## Parameters

- **$name** (`string`): Sticker set name
- **$title** (`string`): Sticker set title, 1-64 characters


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setStickerSetTitle
$result = Laragram::setStickerSetTitle($name, $title);

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
