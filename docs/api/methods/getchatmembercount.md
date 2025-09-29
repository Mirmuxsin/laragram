---
layout: default
title: getChatMemberCount
---

# getChatMemberCount

Use this method to get the number of members in a chat. Returns *Int* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getChatMemberCount($chat_id);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getChatMemberCount
$result = Laragram::getChatMemberCount($chat_id);

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
