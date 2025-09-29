---
layout: default
title: setMyDescription
---

# setMyDescription

Use this method to change the bot's description, which is shown in the chat with the bot if the chat is empty. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setMyDescription($description = null, $language_code = null);
```

## Parameters

- **$description** (`string|null`): New bot description; 0-512 characters. Pass an empty string to remove the dedicated description for the given language.
- **$language_code** (`string|null`): A two-letter ISO 639-1 language code. If empty, the description will be applied to all users for whose language there is no dedicated description.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setMyDescription
$result = Laragram::setMyDescription($description = null, $language_code = null);

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
