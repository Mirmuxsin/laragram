---
layout: default
title: sendMessage
---

# sendMessage

Use this method to send text messages. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::sendMessage($business_connection_id = null, $chat_id, $message_thread_id = null, $text, $parse_mode = null, $entities = null, $link_preview_options = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null, $reply_markup = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message will be sent
- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_thread_id** (`integer|null`): Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
- **$text** (`string`): Text of the message to be sent, 1-4096 characters after entities parsing
- **$parse_mode** (`string|null`): Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
- **$entities** (`array|null`): A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse\_mode*
- **$link_preview_options** (`LinkPreviewOptions|null`): Link preview generation options for the message
- **$disable_notification** (`bool|null`): Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
- **$protect_content** (`bool|null`): Protects the contents of the sent message from forwarding and saving
- **$allow_paid_broadcast** (`bool|null`): Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
- **$message_effect_id** (`string|null`): Unique identifier of the message effect to be added to the message; for private chats only
- **$reply_parameters** (`ReplyParameters|null`): Description of the message to reply to
- **$reply_markup** (`any_of|null`): Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards), [custom reply keyboard](https://core.telegram.org/bots/features#keyboards), instructions to remove a reply keyboard or to force a reply from the user


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of sendMessage
$result = Laragram::sendMessage($business_connection_id = null, $chat_id, $message_thread_id = null, $text, $parse_mode = null, $entities = null, $link_preview_options = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null, $reply_markup = null);

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
