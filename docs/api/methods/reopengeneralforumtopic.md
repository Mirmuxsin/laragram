---
layout: default
title: reopenGeneralForumTopic
---

# reopenGeneralForumTopic

Use this method to reopen a closed 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights. The topic will be automatically unhidden if it was hidden. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::reopenGeneralForumTopic($chat_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of reopenGeneralForumTopic
$result = Laragram::reopenGeneralForumTopic($chat_id);

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
