---
layout: default
title: sendGift
---

# sendGift

Sends a gift to the given user or channel chat. The gift can't be converted to Telegram Stars by the receiver. Returns *True* on success.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::sendGift($user_id = null, $chat_id = null, $gift_id, $pay_for_upgrade = null, $text = null, $text_parse_mode = null, $text_entities = null);
```

## Parameters

- **$user_id** (`integer|null`): Required if *chat\_id* is not specified. Unique identifier of the target user who will receive the gift.
- **$chat_id** (`any_of|null`): Required if *user\_id* is not specified. Unique identifier for the chat or username of the channel (in the format `@channelusername`) that will receive the gift.
- **$gift_id** (`string`): Identifier of the gift
- **$pay_for_upgrade** (`bool|null`): Pass *True* to pay for the gift upgrade from the bot's balance, thereby making the upgrade free for the receiver
- **$text** (`string|null`): Text that will be shown along with the gift; 0-128 characters
- **$text_parse_mode** (`string|null`): Mode for parsing entities in the text. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom\_emoji” are ignored.
- **$text_entities** (`array|null`): A JSON-serialized list of special entities that appear in the gift text. It can be specified instead of *text\_parse\_mode*. Entities other than “bold”, “italic”, “underline”, “strikethrough”, “spoiler”, and “custom\_emoji” are ignored.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of sendGift
$result = Laragram::sendGift($user_id = null, $chat_id = null, $gift_id, $pay_for_upgrade = null, $text = null, $text_parse_mode = null, $text_entities = null);

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
