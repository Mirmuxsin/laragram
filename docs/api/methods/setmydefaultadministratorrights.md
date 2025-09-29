---
layout: default
title: setMyDefaultAdministratorRights
---

# setMyDefaultAdministratorRights

Use this method to change the default administrator rights requested by the bot when it's added as an administrator to groups or channels. These rights will be suggested to users, but they are free to modify the list before adding the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setMyDefaultAdministratorRights($rights = null, $for_channels = null);
```

## Parameters

- **$rights** (`ChatAdministratorRights|null`): A JSON-serialized object describing new default administrator rights. If not specified, the default administrator rights will be cleared.
- **$for_channels** (`bool|null`): Pass *True* to change the default administrator rights of the bot in channels. Otherwise, the default administrator rights of the bot for groups and supergroups will be changed.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setMyDefaultAdministratorRights
$result = Laragram::setMyDefaultAdministratorRights($rights = null, $for_channels = null);

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
