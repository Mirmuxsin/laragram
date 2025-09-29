---
layout: default
title: setMyShortDescription
---

# setMyShortDescription

Use this method to change the bot's short description, which is shown on the bot's profile page and is sent together with the link when users share the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setMyShortDescription($short_description = null, $language_code = null);
```

## Parameters

- **$short_description** (`string|null`): New short description for the bot; 0-120 characters. Pass an empty string to remove the dedicated short description for the given language.
- **$language_code** (`string|null`): A two-letter ISO 639-1 language code. If empty, the short description will be applied to all users for whose language there is no dedicated short description.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setMyShortDescription
$result = Laragram::setMyShortDescription($short_description = null, $language_code = null);

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
