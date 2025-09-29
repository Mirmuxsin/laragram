---
layout: default
title: getChatMenuButton
---

# getChatMenuButton

Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns [MenuButton](https://core.telegram.org/bots/api/#menubutton) on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getChatMenuButton($chat_id = null);
```

## Parameters

- **$chat_id** (`integer|null`): Unique identifier for the target private chat. If not specified, default bot's menu button will be returned


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getChatMenuButton
$result = Laragram::getChatMenuButton($chat_id = null);

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
