---
layout: default
title: getMyDefaultAdministratorRights
---

# getMyDefaultAdministratorRights

Use this method to get the current default administrator rights of the bot. Returns [ChatAdministratorRights](https://core.telegram.org/bots/api/#chatadministratorrights) on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getMyDefaultAdministratorRights($for_channels = null);
```

## Parameters

- **$for_channels** (`bool|null`): Pass *True* to get default administrator rights of the bot in channels. Otherwise, default administrator rights of the bot for groups and supergroups will be returned.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getMyDefaultAdministratorRights
$result = Laragram::getMyDefaultAdministratorRights($for_channels = null);

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
