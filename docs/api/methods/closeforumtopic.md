---
layout: default
title: closeForumTopic
---

# closeForumTopic

Use this method to close an open topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights, unless it is the creator of the topic. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::closeForumTopic($chat_id, $message_thread_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
- **$message_thread_id** (`integer`): Unique identifier for the target message thread of the forum topic


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of closeForumTopic
$result = Laragram::closeForumTopic($chat_id, $message_thread_id);

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
