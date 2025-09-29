---
layout: default
title: getMyName
---

# getMyName

Use this method to get the current bot name for the given user language. Returns [BotName](https://core.telegram.org/bots/api/#botname) on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getMyName($language_code = null);
```

## Parameters

- **$language_code** (`string|null`): A two-letter ISO 639-1 language code or an empty string


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getMyName
$result = Laragram::getMyName($language_code = null);

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
