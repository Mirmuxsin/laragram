---
layout: default
title: leaveChat
---

# leaveChat

Use this method for your bot to leave a group, supergroup or channel. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::leaveChat($chat_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of leaveChat
$result = Laragram::leaveChat($chat_id);

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
