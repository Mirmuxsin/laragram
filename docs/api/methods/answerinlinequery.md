---
layout: default
title: answerInlineQuery
---

# answerInlineQuery

Use this method to send answers to an inline query. On success, *True* is returned.  
No more than **50** results per query are allowed.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::answerInlineQuery($inline_query_id, $results, $cache_time = null, $is_personal = null, $next_offset = null, $button = null);
```

## Parameters

- **$inline_query_id** (`string`): Unique identifier for the answered query
- **$results** (`array`): A JSON-serialized array of results for the inline query
- **$cache_time** (`integer|null`): The maximum amount of time in seconds that the result of the inline query may be cached on the server. Defaults to 300.
- **$is_personal** (`bool|null`): Pass *True* if results may be cached on the server side only for the user that sent the query. By default, results may be returned to any user who sends the same query.
- **$next_offset** (`string|null`): Pass the offset that a client should send in the next query with the same text to receive more results. Pass an empty string if there are no more results or if you don't support pagination. Offset length can't exceed 64 bytes.
- **$button** (`InlineQueryResultsButton|null`): A JSON-serialized object describing a button to be shown above inline query results


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of answerInlineQuery
$result = Laragram::answerInlineQuery($inline_query_id, $results, $cache_time = null, $is_personal = null, $next_offset = null, $button = null);

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
