---
layout: default
title: forwardMessages
---

# forwardMessages

Use this method to forward multiple messages of any kind. If some of the specified messages can't be found or forwarded, they are skipped. Service messages and messages with protected content can't be forwarded. Album grouping is kept for forwarded messages. On success, an array of [MessageId](https://core.telegram.org/bots/api/#messageid) of the sent messages is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::forwardMessages($chat_id, $message_thread_id = null, $from_chat_id, $message_ids, $disable_notification = null, $protect_content = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_thread_id** (`integer|null`): Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
- **$from_chat_id** (`any_of`): Unique identifier for the chat where the original messages were sent (or channel username in the format `@channelusername`)
- **$message_ids** (`array`): A JSON-serialized list of 1-100 identifiers of messages in the chat *from\_chat\_id* to forward. The identifiers must be specified in a strictly increasing order.
- **$disable_notification** (`bool|null`): Sends the messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
- **$protect_content** (`bool|null`): Protects the contents of the forwarded messages from forwarding and saving


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of forwardMessages
$result = Laragram::forwardMessages($chat_id, $message_thread_id = null, $from_chat_id, $message_ids, $disable_notification = null, $protect_content = null);

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
