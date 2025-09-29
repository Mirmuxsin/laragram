---
layout: default
title: setChatMenuButton
---

# setChatMenuButton

Use this method to change the bot's menu button in a private chat, or the default menu button. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setChatMenuButton($chat_id = null, $menu_button = null);
```

## Parameters

- **$chat_id** (`integer|null`): Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
- **$menu_button** (`MenuButton|null`): A JSON-serialized object for the bot's new menu button. Defaults to [MenuButtonDefault](https://core.telegram.org/bots/api/#menubuttondefault)


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setChatMenuButton
$result = Laragram::setChatMenuButton($chat_id = null, $menu_button = null);

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
