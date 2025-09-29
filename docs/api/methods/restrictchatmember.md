---
layout: default
title: restrictChatMember
---

# restrictChatMember

Use this method to restrict a user in a supergroup. The bot must be an administrator in the supergroup for this to work and must have the appropriate administrator rights. Pass *True* for all permissions to lift restrictions from a user. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::restrictChatMember($chat_id, $user_id, $permissions, $use_independent_chat_permissions = null, $until_date = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
- **$user_id** (`integer`): Unique identifier of the target user
- **$permissions** (`ChatPermissions`): A JSON-serialized object for new user permissions
- **$use_independent_chat_permissions** (`bool|null`): Pass *True* if chat permissions are set independently. Otherwise, the *can\_send\_other\_messages* and *can\_add\_web\_page\_previews* permissions will imply the *can\_send\_messages*, *can\_send\_audios*, *can\_send\_documents*, *can\_send\_photos*, *can\_send\_videos*, *can\_send\_video\_notes*, and *can\_send\_voice\_notes* permissions; the *can\_send\_polls* permission will imply the *can\_send\_messages* permission.
- **$until_date** (`integer|null`): Date when restrictions will be lifted for the user; Unix time. If user is restricted for more than 366 days or less than 30 seconds from the current time, they are considered to be restricted forever


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of restrictChatMember
$result = Laragram::restrictChatMember($chat_id, $user_id, $permissions, $use_independent_chat_permissions = null, $until_date = null);

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
