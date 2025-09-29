---
layout: default
title: editForumTopic
---

# editForumTopic

Use this method to edit name and icon of a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights, unless it is the creator of the topic. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::editForumTopic($chat_id, $message_thread_id, $name = null, $icon_custom_emoji_id = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
- **$message_thread_id** (`integer`): Unique identifier for the target message thread of the forum topic
- **$name** (`string|null`): New topic name, 0-128 characters. If not specified or empty, the current name of the topic will be kept
- **$icon_custom_emoji_id** (`string|null`): New unique identifier of the custom emoji shown as the topic icon. Use [getForumTopicIconStickers](https://core.telegram.org/bots/api/#getforumtopiciconstickers) to get all allowed custom emoji identifiers. Pass an empty string to remove the icon. If not specified, the current icon will be kept


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of editForumTopic
$result = Laragram::editForumTopic($chat_id, $message_thread_id, $name = null, $icon_custom_emoji_id = null);

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
