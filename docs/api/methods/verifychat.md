---
layout: default
title: verifyChat
---

# verifyChat

Verifies a chat [on behalf of the organization](https://telegram.org/verify#third-party-verification) which is represented by the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::verifyChat($chat_id, $custom_description = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$custom_description** (`string|null`): Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of verifyChat
$result = Laragram::verifyChat($chat_id, $custom_description = null);

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
