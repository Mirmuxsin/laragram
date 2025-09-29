---
layout: default
title: logOut
---

# logOut

Use this method to log out from the cloud Bot API server before launching the bot locally. You **must** log out the bot before running it locally, otherwise there is no guarantee that the bot will receive updates. After a successful call, you can immediately log in on a local server, but will not be able to log in back to the cloud Bot API server for 10 minutes. Returns *True* on success. Requires no parameters.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::logOut();
```

## Parameters



## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of logOut
$result = Laragram::logOut();

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
