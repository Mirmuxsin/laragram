---
layout: default
title: sendPoll
---

# sendPoll

Use this method to send a native poll. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::sendPoll($business_connection_id = null, $chat_id, $message_thread_id = null, $question, $question_parse_mode = null, $question_entities = null, $options, $is_anonymous = null, $type = null, $allows_multiple_answers = null, $correct_option_id = null, $explanation = null, $explanation_parse_mode = null, $explanation_entities = null, $open_period = null, $close_date = null, $is_closed = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null, $reply_markup = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message will be sent
- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_thread_id** (`integer|null`): Unique identifier for the target message thread (topic) of the forum; for forum supergroups only
- **$question** (`string`): Poll question, 1-300 characters
- **$question_parse_mode** (`string|null`): Mode for parsing entities in the question. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details. Currently, only custom emoji entities are allowed
- **$question_entities** (`array|null`): A JSON-serialized list of special entities that appear in the poll question. It can be specified instead of *question\_parse\_mode*
- **$options** (`array`): A JSON-serialized list of 2-10 answer options
- **$is_anonymous** (`bool|null`): *True*, if the poll needs to be anonymous, defaults to *True*
- **$type** (`string|null`): Poll type, “quiz” or “regular”, defaults to “regular”
- **$allows_multiple_answers** (`bool|null`): *True*, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to *False*
- **$correct_option_id** (`integer|null`): 0-based identifier of the correct answer option, required for polls in quiz mode
- **$explanation** (`string|null`): Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
- **$explanation_parse_mode** (`string|null`): Mode for parsing entities in the explanation. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
- **$explanation_entities** (`array|null`): A JSON-serialized list of special entities that appear in the poll explanation. It can be specified instead of *explanation\_parse\_mode*
- **$open_period** (`integer|null`): Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with *close\_date*.
- **$close_date** (`integer|null`): Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with *open\_period*.
- **$is_closed** (`bool|null`): Pass *True* if the poll needs to be immediately closed. This can be useful for poll preview.
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
// Example usage of sendPoll
$result = Laragram::sendPoll($business_connection_id = null, $chat_id, $message_thread_id = null, $question, $question_parse_mode = null, $question_entities = null, $options, $is_anonymous = null, $type = null, $allows_multiple_answers = null, $correct_option_id = null, $explanation = null, $explanation_parse_mode = null, $explanation_entities = null, $open_period = null, $close_date = null, $is_closed = null, $disable_notification = null, $protect_content = null, $allow_paid_broadcast = null, $message_effect_id = null, $reply_parameters = null, $reply_markup = null);

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
