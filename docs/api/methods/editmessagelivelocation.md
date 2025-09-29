---
layout: default
title: editMessageLiveLocation
---

# editMessageLiveLocation

Use this method to edit live location messages. A location can be edited until its *live\_period* expires or editing is explicitly disabled by a call to [stopMessageLiveLocation](https://core.telegram.org/bots/api/#stopmessagelivelocation). On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::editMessageLiveLocation($business_connection_id = null, $chat_id = null, $message_id = null, $inline_message_id = null, $latitude, $longitude, $live_period = null, $horizontal_accuracy = null, $heading = null, $proximity_alert_radius = null, $reply_markup = null);
```

## Parameters

- **$business_connection_id** (`string|null`): Unique identifier of the business connection on behalf of which the message to be edited was sent
- **$chat_id** (`any_of|null`): Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
- **$message_id** (`integer|null`): Required if *inline\_message\_id* is not specified. Identifier of the message to edit
- **$inline_message_id** (`string|null`): Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
- **$latitude** (`float`): Latitude of new location
- **$longitude** (`float`): Longitude of new location
- **$live_period** (`integer|null`): New period in seconds during which the location can be updated, starting from the message send date. If 0x7FFFFFFF is specified, then the location can be updated forever. Otherwise, the new value must not exceed the current *live\_period* by more than a day, and the live location expiration date must remain within the next 90 days. If not specified, then *live\_period* remains unchanged
- **$horizontal_accuracy** (`float|null`): The radius of uncertainty for the location, measured in meters; 0-1500
- **$heading** (`integer|null`): Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
- **$proximity_alert_radius** (`integer|null`): The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
- **$reply_markup** (`InlineKeyboardMarkup|null`): A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots/features#inline-keyboards).


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of editMessageLiveLocation
$result = Laragram::editMessageLiveLocation($business_connection_id = null, $chat_id = null, $message_id = null, $inline_message_id = null, $latitude, $longitude, $live_period = null, $horizontal_accuracy = null, $heading = null, $proximity_alert_radius = null, $reply_markup = null);

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
