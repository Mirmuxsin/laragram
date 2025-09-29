---
layout: default
title: verifyUser
---

# verifyUser

Verifies a user [on behalf of the organization](https://telegram.org/verify#third-party-verification) which is represented by the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::verifyUser($user_id, $custom_description = null);
```

## Parameters

- **$user_id** (`integer`): Unique identifier of the target user
- **$custom_description** (`string|null`): Custom description for the verification; 0-70 characters. Must be empty if the organization isn't allowed to provide a custom verification description.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of verifyUser
$result = Laragram::verifyUser($user_id, $custom_description = null);

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
