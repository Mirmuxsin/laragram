---
layout: default
title: getMyShortDescription
---

# getMyShortDescription

Use this method to get the current bot short description for the given user language. Returns [BotShortDescription](https://core.telegram.org/bots/api/#botshortdescription) on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getMyShortDescription($language_code = null);
```

## Parameters

- **$language_code** (`string|null`): A two-letter ISO 639-1 language code or an empty string


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getMyShortDescription
$result = Laragram::getMyShortDescription($language_code = null);

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
