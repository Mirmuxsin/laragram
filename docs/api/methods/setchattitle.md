---
layout: default
title: setChatTitle
---

# setChatTitle

Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setChatTitle($chat_id, $title);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$title** (`string`): New chat title, 1-128 characters


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setChatTitle
$result = Laragram::setChatTitle($chat_id, $title);

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
