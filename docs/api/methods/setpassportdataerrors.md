---
layout: default
title: setPassportDataErrors
---

# setPassportDataErrors

Informs a user that some of the Telegram Passport elements they provided contains errors. The user will not be able to re-submit their Passport to you until the errors are fixed (the contents of the field for which you returned the error must change). Returns *True* on success.

Use this if the data submitted by the user doesn't satisfy the standards your service requires for any reason. For example, if a birthday date seems invalid, a submitted document is blurry, a scan shows evidence of tampering, etc. Supply some details in the error message to make sure the user knows how to correct the issues.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setPassportDataErrors($user_id, $errors);
```

## Parameters

- **$user_id** (`integer`): User identifier
- **$errors** (`array`): A JSON-serialized array describing the errors


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setPassportDataErrors
$result = Laragram::setPassportDataErrors($user_id, $errors);

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
