---
layout: default
title: getChat
---

# getChat

Use this method to get up-to-date information about the chat. Returns a [ChatFullInfo](https://core.telegram.org/bots/api/#chatfullinfo) object on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getChat($chat_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getChat
$result = Laragram::getChat($chat_id);

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
