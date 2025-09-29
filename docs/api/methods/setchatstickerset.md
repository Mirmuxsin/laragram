---
layout: default
title: setChatStickerSet
---

# setChatStickerSet

Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field *can\_set\_sticker\_set* optionally returned in [getChat](https://core.telegram.org/bots/api/#getchat) requests to check if the bot can use this method. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setChatStickerSet($chat_id, $sticker_set_name);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
- **$sticker_set_name** (`string`): Name of the sticker set to be set as the group sticker set


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setChatStickerSet
$result = Laragram::setChatStickerSet($chat_id, $sticker_set_name);

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
