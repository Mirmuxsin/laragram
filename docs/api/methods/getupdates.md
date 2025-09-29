---
layout: default
title: getUpdates
---

# getUpdates

Use this method to receive incoming updates using long polling ([wiki](https://en.wikipedia.org/wiki/Push_technology#Long_polling)). Returns an Array of [Update](https://core.telegram.org/bots/api/#update) objects.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getUpdates($offset = null, $limit = null, $timeout = null, $allowed_updates = null);
```

## Parameters

- **$offset** (`integer|null`): Identifier of the first update to be returned. Must be greater by one than the highest among the identifiers of previously received updates. By default, updates starting with the earliest unconfirmed update are returned. An update is considered confirmed as soon as [getUpdates](https://core.telegram.org/bots/api/#getupdates) is called with an *offset* higher than its *update\_id*. The negative offset can be specified to retrieve updates starting from *-offset* update from the end of the updates queue. All previous updates will be forgotten.
- **$limit** (`integer|null`): Limits the number of updates to be retrieved. Values between 1-100 are accepted. Defaults to 100.
- **$timeout** (`integer|null`): Timeout in seconds for long polling. Defaults to 0, i.e. usual short polling. Should be positive, short polling should be used for testing purposes only.
- **$allowed_updates** (`array|null`): A JSON-serialized list of the update types you want your bot to receive. For example, specify `["message", "edited_channel_post", "callback_query"]` to only receive updates of these types. See [Update](https://core.telegram.org/bots/api/#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member*, *message\_reaction*, and *message\_reaction\_count* (default). If not specified, the previous setting will be used.  

Please note that this parameter doesn't affect updates created before the call to getUpdates, so unwanted updates may be received for a short period of time.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getUpdates
$result = Laragram::getUpdates($offset = null, $limit = null, $timeout = null, $allowed_updates = null);

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
