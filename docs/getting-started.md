---
layout: default
title: Getting Started
---

# Getting Started with Laragram

## Installation

### Requirements
- PHP 8.0+
- Laravel 5.5+ (or any framework using Illuminate components)

### Step 1: Install Package

```bash
composer require milly/laragram
```

### Step 2: Publish Configuration

```bash
php artisan vendor:publish --provider="Milly\Laragram\LaragramServiceProvider"
```

### Step 3: Configure Bot Token

Add your Telegram bot token to `.env`:

```bash
TELEGRAM_BOT_TOKEN=123456789:XXXXXXXXXXXXXXXXXXXXXXXXXXX
```

### Step 4: Run Migration (for FSM Routing)

```bash
php artisan migrate
```

## Basic Usage

### Sending Messages

```php
use Milly\Laragram\Laragram;

// Send a simple message
Laragram::sendMessage(
    chat_id: 123456789,
    message_thread_id: null,
    text: "Hello, World!"
);

// Send with additional options
Laragram::sendMessage(
    chat_id: 123456789,
    message_thread_id: null,
    text: "Hello, World!",
    parse_mode: "HTML",
    reply_markup: [
        'inline_keyboard' => [
            [
                ['text' => 'Button 1', 'callback_data' => 'btn1'],
                ['text' => 'Button 2', 'callback_data' => 'btn2']
            ]
        ]
    ]
);
```

### Handling Updates

```php
use Milly\Laragram\Types\Update;
use Milly\Laragram\Types\Message;

// Get update from webhook
$update = new Update();

if ($update->message) {
    $message = $update->message;
    echo "Received: " . $message->text;
}
```

### FSM Routing

```php
use Milly\Laragram\FSM\FSM;

// Define routes
FSM::route('start', [BotController::class, 'start']);
FSM::route('help', [BotController::class, 'help']);
FSM::route('settings', [BotController::class, 'settings']);

// Update user state
FSM::update('settings', $userId);
```

## Next Steps

- [FSM Routing Guide](fsm-routing.md) - Learn about state management
- [API Reference](api/index.md) - Explore all available methods
- [Examples](examples/basic-bot.md) - See real-world implementations
