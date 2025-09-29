---
layout: default
title: getForumTopicIconStickers
---

# getForumTopicIconStickers

Use this method to get custom emoji stickers, which can be used as a forum topic icon by any user. Requires no parameters. Returns an Array of [Sticker](https://core.telegram.org/bots/api/#sticker) objects.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getForumTopicIconStickers();
```

## Parameters



## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getForumTopicIconStickers
$result = Laragram::getForumTopicIconStickers();

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
