---
layout: default
title: setChatAdministratorCustomTitle
---

# setChatAdministratorCustomTitle

Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setChatAdministratorCustomTitle($chat_id, $user_id, $custom_title);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
- **$user_id** (`integer`): Unique identifier of the target user
- **$custom_title** (`string`): New custom title for the administrator; 0-16 characters, emoji are not allowed


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setChatAdministratorCustomTitle
$result = Laragram::setChatAdministratorCustomTitle($chat_id, $user_id, $custom_title);

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
