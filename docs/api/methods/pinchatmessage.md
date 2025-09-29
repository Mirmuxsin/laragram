---
layout: default
title: pinChatMessage
---

# pinChatMessage

Use this method to add a message to the list of pinned messages in a chat. If the chat is not a private chat, the bot must be an administrator in the chat for this to work and must have the 'can\_pin\_messages' administrator right in a supergroup or 'can\_edit\_messages' administrator right in a channel. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::pinChatMessage($business_connection_id = null, $chat_id, $message_id, $disable_notification = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message will be pinned
- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_id** (`integer`): Identifier of a message to pin
- **$disable_notification** (`bool|null`): Pass *True* if it is not necessary to send a notification to all chat members about the new pinned message. Notifications are always disabled in channels and private chats.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of pinChatMessage
$result = Laragram::pinChatMessage($business_connection_id = null, $chat_id, $message_id, $disable_notification = null);

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
