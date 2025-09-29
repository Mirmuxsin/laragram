---
layout: default
title: unpinAllChatMessages
---

# unpinAllChatMessages

Use this method to clear the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can\_pin\_messages' administrator right in a supergroup or 'can\_edit\_messages' administrator right in a channel. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::unpinAllChatMessages($chat_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of unpinAllChatMessages
$result = Laragram::unpinAllChatMessages($chat_id);

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
