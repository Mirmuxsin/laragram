---
layout: default
title: copyMessages
---

# copyMessages

Use this method to copy messages of any kind. If some of the specified messages can't be found or copied, they are skipped. Service messages, paid media messages, giveaway messages, giveaway winners messages, and invoice messages can't be copied. A quiz [poll](https://core.telegram.org/bots/api/#poll) can be copied only if the value of the field *correct\_option\_id* is known to the bot. The method is analogous to the method [forwardMessages](https://core.telegram.org/bots/api/#forwardmessages), but the copied messages don't have a link to the original message. Album grouping is kept for copied messages. On success, an array of [MessageId](https://core.telegram.org/bots/api/#messageid) of the sent messages is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::copyMessages($chat_id, $message_thread_id = null, $from_chat_id, $message_ids, $disable_notification = null, $protect_content = null, $remove_caption = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_thread_id** (`integer|null`): Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
- **$from_chat_id** (`any_of`): Unique identifier for the chat where the original messages were sent (or channel username in the format `@channelusername`)
- **$message_ids** (`array`): A JSON-serialized list of 1-100 identifiers of messages in the chat *from\_chat\_id* to copy. The identifiers must be specified in a strictly increasing order.
- **$disable_notification** (`bool|null`): Sends the messages [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
- **$protect_content** (`bool|null`): Protects the contents of the sent messages from forwarding and saving
- **$remove_caption** (`bool|null`): Pass *True* to copy the messages without their captions


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of copyMessages
$result = Laragram::copyMessages($chat_id, $message_thread_id = null, $from_chat_id, $message_ids, $disable_notification = null, $protect_content = null, $remove_caption = null);

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
