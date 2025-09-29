---
layout: default
title: setUserEmojiStatus
---

# setUserEmojiStatus

Changes the emoji status for a given user that previously allowed the bot to manage their emoji status via the Mini App method [requestEmojiStatusAccess](https://core.telegram.org/bots/webapps#initializing-mini-apps). Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setUserEmojiStatus($user_id, $emoji_status_custom_emoji_id = null, $emoji_status_expiration_date = null);
```

## Parameters

- **$user_id** (`integer`): Unique identifier of the target user
- **$emoji_status_custom_emoji_id** (`string|null`): Custom emoji identifier of the emoji status to set. Pass an empty string to remove the status.
- **$emoji_status_expiration_date** (`integer|null`): Expiration date of the emoji status, if any


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setUserEmojiStatus
$result = Laragram::setUserEmojiStatus($user_id, $emoji_status_custom_emoji_id = null, $emoji_status_expiration_date = null);

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
