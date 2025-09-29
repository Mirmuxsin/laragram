---
layout: default
title: setGameScore
---

# setGameScore

Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned. Returns an error, if the new score is not greater than the user's current score in the chat and *force* is *False*.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setGameScore($user_id, $score, $force = null, $disable_edit_message = null, $chat_id = null, $message_id = null, $inline_message_id = null);
```

## Parameters

- **$user_id** (`integer`): User identifier
- **$score** (`integer`): New score, must be non-negative
- **$force** (`bool|null`): Pass *True* if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
- **$disable_edit_message** (`bool|null`): Pass *True* if the game message should not be automatically edited to include the current scoreboard
- **$chat_id** (`integer|null`): Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
- **$message_id** (`integer|null`): Required if *inline\_message\_id* is not specified. Identifier of the sent message
- **$inline_message_id** (`string|null`): Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setGameScore
$result = Laragram::setGameScore($user_id, $score, $force = null, $disable_edit_message = null, $chat_id = null, $message_id = null, $inline_message_id = null);

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
