---
layout: default
title: setChatPhoto
---

# setChatPhoto

Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setChatPhoto($chat_id, $photo);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$photo** (`InputFile`): New chat photo, uploaded using multipart/form-data


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setChatPhoto
$result = Laragram::setChatPhoto($chat_id, $photo);

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
