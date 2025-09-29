---
layout: default
title: setWebhook
---

# setWebhook

Use this method to specify a URL and receive incoming updates via an outgoing webhook. Whenever there is an update for the bot, we will send an HTTPS POST request to the specified URL, containing a JSON-serialized [Update](https://core.telegram.org/bots/api/#update). In case of an unsuccessful request (a request with response [HTTP status code](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes) different from `2XY`), we will repeat the request and give up after a reasonable amount of attempts. Returns *True* on success.

If you'd like to make sure that the webhook was set by you, you can specify secret data in the parameter *secret\_token*. If specified, the request will contain a header “X-Telegram-Bot-Api-Secret-Token” with the secret token as content.

## Usage

```php
use Milly\Laragram\Laragram;

$result = Laragram::setWebhook($url, $certificate = null, $ip_address = null, $max_connections = null, $allowed_updates = null, $drop_pending_updates = null, $secret_token = null);
```

## Parameters

- **$url** (`string`): HTTPS URL to send updates to. Use an empty string to remove webhook integration
- **$certificate** (`InputFile|null`): Upload your public key certificate so that the root certificate in use can be checked. See our [self-signed guide](https://core.telegram.org/bots/self-signed) for details.
- **$ip_address** (`string|null`): The fixed IP address which will be used to send webhook requests instead of the IP address resolved through DNS
- **$max_connections** (`integer|null`): The maximum allowed number of simultaneous HTTPS connections to the webhook for update delivery, 1-100. Defaults to *40*. Use lower values to limit the load on your bot's server, and higher values to increase your bot's throughput.
- **$allowed_updates** (`array|null`): A JSON-serialized list of the update types you want your bot to receive. For example, specify `["message", "edited_channel_post", "callback_query"]` to only receive updates of these types. See [Update](https://core.telegram.org/bots/api/#update) for a complete list of available update types. Specify an empty list to receive all update types except *chat\_member*, *message\_reaction*, and *message\_reaction\_count* (default). If not specified, the previous setting will be used.  
Please note that this parameter doesn't affect updates created before the call to the setWebhook, so unwanted updates may be received for a short period of time.
- **$drop_pending_updates** (`bool|null`): Pass *True* to drop all pending updates
- **$secret_token** (`string|null`): A secret token to be sent in a header “X-Telegram-Bot-Api-Secret-Token” in every webhook request, 1-256 characters. Only characters `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed. The header is useful to ensure that the request comes from a webhook set by you.


## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of setWebhook
$result = Laragram::setWebhook($url, $certificate = null, $ip_address = null, $max_connections = null, $allowed_updates = null, $drop_pending_updates = null, $secret_token = null);

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
