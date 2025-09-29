---
layout: default
title: deleteForumTopic
---

# deleteForumTopic

Use this method to delete a forum topic along with all its messages in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_delete\_messages* administrator rights. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::deleteForumTopic($chat_id, $message_thread_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
- **$message_thread_id** (`integer`): Unique identifier for the target message thread of the forum topic


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of deleteForumTopic
$result = Laragram::deleteForumTopic($chat_id, $message_thread_id);

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
