---
layout: default
title: getGameHighScores
---

# getGameHighScores

Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. Returns an Array of [GameHighScore](https://core.telegram.org/bots/api/#gamehighscore) objects.

This method will currently return scores for the target user, plus two of their closest neighbors on each side. Will also return the top three users if the user and their neighbors are not among them. Please note that this behavior is subject to change.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getGameHighScores($user_id, $chat_id = null, $message_id = null, $inline_message_id = null);
```

## Parameters

- **$user_id** (`integer`): Target user id
- **$chat_id** (`integer|null`): Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
- **$message_id** (`integer|null`): Required if *inline\_message\_id* is not specified. Identifier of the sent message
- **$inline_message_id** (`string|null`): Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getGameHighScores
$result = Laragram::getGameHighScores($user_id, $chat_id = null, $message_id = null, $inline_message_id = null);

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
