---
layout: default
title: getMyCommands
---

# getMyCommands

Use this method to get the current list of the bot's commands for the given scope and user language. Returns an Array of [BotCommand](https://core.telegram.org/bots/api/#botcommand) objects. If commands aren't set, an empty list is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getMyCommands($scope = null, $language_code = null);
```

## Parameters

- **$scope** (`BotCommandScope|null`): A JSON-serialized object, describing scope of users. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
- **$language_code** (`string|null`): A two-letter ISO 639-1 language code or an empty string


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getMyCommands
$result = Laragram::getMyCommands($scope = null, $language_code = null);

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
