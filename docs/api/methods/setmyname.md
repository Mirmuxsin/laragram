---
layout: default
title: setMyName
---

# setMyName

Use this method to change the bot's name. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setMyName($name = null, $language_code = null);
```

## Parameters

- **$name** (`string|null`): New bot name; 0-64 characters. Pass an empty string to remove the dedicated name for the given language.
- **$language_code** (`string|null`): A two-letter ISO 639-1 language code. If empty, the name will be shown to all users for whose language there is no dedicated name.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setMyName
$result = Laragram::setMyName($name = null, $language_code = null);

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
