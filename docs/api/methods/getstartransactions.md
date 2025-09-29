---
layout: default
title: getStarTransactions
---

# getStarTransactions

Returns the bot's Telegram Star transactions in chronological order. On success, returns a [StarTransactions](https://core.telegram.org/bots/api/#startransactions) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getStarTransactions($offset = null, $limit = null);
```

## Parameters

- **$offset** (`integer|null`): Number of transactions to skip in the response
- **$limit** (`integer|null`): The maximum number of transactions to be retrieved. Values between 1-100 are accepted. Defaults to 100.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getStarTransactions
$result = Laragram::getStarTransactions($offset = null, $limit = null);

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
