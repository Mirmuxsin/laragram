---
layout: default
title: uploadStickerFile
---

# uploadStickerFile

Use this method to upload a file with a sticker for later use in the [createNewStickerSet](https://core.telegram.org/bots/api/#createnewstickerset), [addStickerToSet](https://core.telegram.org/bots/api/#addstickertoset), or [replaceStickerInSet](https://core.telegram.org/bots/api/#replacestickerinset) methods (the file can be used multiple times). Returns the uploaded [File](https://core.telegram.org/bots/api/#file) on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::uploadStickerFile($user_id, $sticker, $sticker_format);
```

## Parameters

- **$user_id** (`integer`): User identifier of sticker file owner
- **$sticker** (`InputFile`): A file with the sticker in .WEBP, .PNG, .TGS, or .WEBM format. See [https://core.telegram.org/stickers](https://core.telegram.org/stickers) for technical requirements. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
- **$sticker_format** (`string`): Format of the sticker, must be one of “static”, “animated”, “video”


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of uploadStickerFile
$result = Laragram::uploadStickerFile($user_id, $sticker, $sticker_format);

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
