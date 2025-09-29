---
layout: default
title: deleteMyCommands
---

# deleteMyCommands

Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, [higher level commands](https://core.telegram.org/bots/api/#determining-list-of-commands) will be shown to affected users. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::deleteMyCommands($scope = null, $language_code = null);
```

## Parameters

- **$scope** (`BotCommandScope|null`): A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
- **$language_code** (`string|null`): A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of deleteMyCommands
$result = Laragram::deleteMyCommands($scope = null, $language_code = null);

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
