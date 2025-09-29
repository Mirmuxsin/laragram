---
layout: default
title: getBusinessConnection
---

# getBusinessConnection

Use this method to get information about the connection of the bot with a business account. Returns a [BusinessConnection](https://core.telegram.org/bots/api/#businessconnection) object on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getBusinessConnection($business_connection_id);
```

## Parameters

- **$business_connection_id** (`string`): Unique identifier of the business connection


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getBusinessConnection
$result = Laragram::getBusinessConnection($business_connection_id);

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
