---
layout: default
title: createForumTopic
---

# createForumTopic

Use this method to create a topic in a forum supergroup chat. The bot must be an administrator in the chat for this to work and must have the *can\_manage\_topics* administrator rights. Returns information about the created topic as a [ForumTopic](https://core.telegram.org/bots/api/#forumtopic) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::createForumTopic($chat_id, $name, $icon_color = null, $icon_custom_emoji_id = null);
```

## Parameters

- **$chat_id** (`any_of`): Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
- **$name** (`string`): Topic name, 1-128 characters
- **$icon_color** (`integer|null`): Color of the topic icon in RGB format. Currently, must be one of 7322096 (0x6FB9F0), 16766590 (0xFFD67E), 13338331 (0xCB86DB), 9367192 (0x8EEE98), 16749490 (0xFF93B2), or 16478047 (0xFB6F5F)
- **$icon_custom_emoji_id** (`string|null`): Unique identifier of the custom emoji shown as the topic icon. Use [getForumTopicIconStickers](https://core.telegram.org/bots/api/#getforumtopiciconstickers) to get all allowed custom emoji identifiers.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of createForumTopic
$result = Laragram::createForumTopic($chat_id, $name, $icon_color = null, $icon_custom_emoji_id = null);

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
