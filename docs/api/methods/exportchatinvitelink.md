---
layout: default
title: exportChatInviteLink
---

# exportChatInviteLink

Use this method to generate a new primary invite link for a chat; any previously generated primary link is revoked. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns the new invite link as *String* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::exportChatInviteLink($chat_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of exportChatInviteLink
$result = Laragram::exportChatInviteLink($chat_id);

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
