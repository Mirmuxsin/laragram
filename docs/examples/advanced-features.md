---
layout: default
title: Advanced Features Example
---

# Advanced Features Example

Demonstrates advanced Laragram features.

## File Handling

```php
use Milly\Laragram\Laragram;

// Send photo from URL
Laragram::sendPhoto(
    chat_id: $chatId,
    photo: 'https://example.com/image.jpg',
    caption: 'Check out this image!'
);

// Send document from file
Laragram::sendDocument(
    chat_id: $chatId,
    document: new CURLFile('/path/to/file.pdf'),
    caption: 'Here is your document'
);
```

## Inline Queries

```php
use Milly\Laragram\Types\InlineQuery;

function handleInlineQuery(InlineQuery $query)
{
    $results = [
        [
            'type' => 'article',
            'id' => '1',
            'title' => 'Search Result 1',
            'input_message_content' => [
                'message_text' => 'You selected: ' . $query->query
            ]
        ]
    ];
    
    Laragram::answerInlineQuery(
        inline_query_id: $query->id,
        results: $results
    );
}
```

## Payment Integration

```php
use Milly\Laragram\Types\Invoice;

function createPayment(Message $message)
{
    Laragram::sendInvoice(
        chat_id: $message->chat->id,
        title: 'Premium Subscription',
        description: 'Get access to premium features',
        payload: 'premium_' . $message->from->id,
        provider_token: 'YOUR_PAYMENT_TOKEN',
        currency: 'USD',
        prices: [
            ['label' => 'Premium', 'amount' => 999] // $9.99
        ]
    );
}
```
