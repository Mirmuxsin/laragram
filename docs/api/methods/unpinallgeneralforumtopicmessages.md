---
layout: default
title: unpinAllGeneralForumTopicMessages
---

# unpinAllGeneralForumTopicMessages

Use this method to clear the list of pinned messages in a General forum topic. The bot must be an administrator in the chat for this to work and must have the *can\_pin\_messages* administrator right in the supergroup. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::unpinAllGeneralForumTopicMessages($chat_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of unpinAllGeneralForumTopicMessages
$result = Laragram::unpinAllGeneralForumTopicMessages($chat_id);

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
