---
layout: default
title: setChatDescription
---

# setChatDescription

Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setChatDescription($chat_id, $description = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$description** (`string|null`): New chat description, 0-255 characters


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setChatDescription
$result = Laragram::setChatDescription($chat_id, $description = null);

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
