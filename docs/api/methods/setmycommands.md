---
layout: default
title: setMyCommands
---

# setMyCommands

Use this method to change the list of the bot's commands. See [this manual](https://core.telegram.org/bots/features#commands) for more details about bot commands. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setMyCommands($commands, $scope = null, $language_code = null);
```

## Parameters

- **$commands** (`array`): A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
- **$scope** (`BotCommandScope|null`): A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
- **$language_code** (`string|null`): A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setMyCommands
$result = Laragram::setMyCommands($commands, $scope = null, $language_code = null);

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
