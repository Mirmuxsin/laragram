---
layout: default
title: editGeneralForumTopic
---

# editGeneralForumTopic

Use this method to edit the name of the 'General' topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::editGeneralForumTopic($chat_id, $name);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
- **$name** (`string`): New topic name, 1-128 characters


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of editGeneralForumTopic
$result = Laragram::editGeneralForumTopic($chat_id, $name);

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
