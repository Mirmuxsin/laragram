---
layout: default
title: answerWebAppQuery
---

# answerWebAppQuery

Use this method to set the result of an interaction with a [Web App](https://core.telegram.org/bots/webapps) and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a [SentWebAppMessage](https://core.telegram.org/bots/api/#sentwebappmessage) object is returned.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::answerWebAppQuery($web_app_query_id, $result);
```

## Parameters

- **$web_app_query_id** (`string`): Unique identifier for the query to be answered
- **$result** (`InlineQueryResult`): A JSON-serialized object describing the message to be sent


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of answerWebAppQuery
$result = Laragram::answerWebAppQuery($web_app_query_id, $result);

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
