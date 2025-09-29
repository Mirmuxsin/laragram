---
layout: default
title: sendGame
---

# sendGame

Use this method to send a game. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::sendGame($business_connection_id = null, $chat_id, $message_thread_id = null, $game_short_name, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null, $reply_markup = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message will be sent
- **$chat_id** (`integer`): Unique identifier for the target chat
- **$message_thread_id** (`integer|null`): Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
- **$game_short_name** (`string`): Short name of the game, serves as the unique identifier for the game. Set up your games via [@BotFather](https://t.me/botfather).
- **$disable_notification** (`bool|null`): Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
- **$protect_content** (`bool|null`): Protects the contents of the sent message from forwarding and saving
- **$allow_paid_broadcast** (`bool|null`): Pass *True* to allow up to 1000 messages per second, ignoring [broadcasting limits](https://core.telegram.org/bots/faq#how-can-i-message-all-of-my-bot-39s-subscribers-at-once) for a fee of 0.1 Telegram Stars per message. The relevant Stars will be withdrawn from the bot's balance
- **$message_effect_id** (`string|null`): Unique identifier of the message effect to be added to the message; for private chats only
- **$reply_parameters** (`ReplyParameters|null`): Description of the message to reply to
- **$reply_markup** (`InlineKeyboardMarkup|null`): A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards). If empty, one 'Play game\_title' button will be shown. If not empty, the first button must launch the game.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of sendGame
$result = Laragram::sendGame($business_connection_id = null, $chat_id, $message_thread_id = null, $game_short_name, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null, $reply_markup = null);

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
