---
layout: default
title: unpinChatMessage
---

# unpinChatMessage

Use this method to remove a message from the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can\_pin\_messages' administrator right in a supergroup or 'can\_edit\_messages' administrator right in a channel. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::unpinChatMessage($business_connection_id = null, $chat_id, $message_id = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message will be unpinned
- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_id** (`integer|null`): Identifier of the message to unpin. Required if *business\_connection\_id* is specified. If not specified, the most recent pinned message (by sending date) will be unpinned.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of unpinChatMessage
$result = Laragram::unpinChatMessage($business_connection_id = null, $chat_id, $message_id = null);

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
