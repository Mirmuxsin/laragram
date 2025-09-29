---
layout: default
title: removeUserVerification
---

# removeUserVerification

Removes verification from a user who is currently verified [on behalf of the organization](https://telegram.org/verify#third-party-verification) represented by the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::removeUserVerification($user_id);
```

## Parameters

- **$user_id** (`integer`): Unique identifier of the target user


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of removeUserVerification
$result = Laragram::removeUserVerification($user_id);

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
