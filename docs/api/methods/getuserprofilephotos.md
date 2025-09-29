---
layout: default
title: getUserProfilePhotos
---

# getUserProfilePhotos

Use this method to get a list of profile pictures for a user. Returns a [UserProfilePhotos](https://core.telegram.org/bots/api/#userprofilephotos) object.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::getUserProfilePhotos($user_id, $offset = null, $limit = null);
```

## Parameters

- **$user_id** (`integer`): Unique identifier of the target user
- **$offset** (`integer|null`): Sequential number of the first photo to be returned. By default, all photos are returned.
- **$limit** (`integer|null`): Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of getUserProfilePhotos
$result = Laragram::getUserProfilePhotos($user_id, $offset = null, $limit = null);

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
