---
layout: default
title: FSM Bot Example
---

# FSM Bot Example

A bot with state management using FSM routing.

## Implementation

```php
<?php

use Milly\Laragram\FSM\FSM;
use Milly\Laragram\Laragram;
use Milly\Laragram\Types\Message;

class BotController
{
    public function start(Message $message)
    {
        Laragram::sendMessage(
            $message->chat->id,
            null,
            "Welcome! Choose an option:",
            reply_markup: [
                'inline_keyboard' => [
                    [
                        ['text' => 'Settings', 'callback_data' => 'settings'],
                        ['text' => 'Help', 'callback_data' => 'help']
                    ]
                ]
            ]
        );
        
        FSM::update('main_menu', $message->from->id);
    }
    
    public function settings(Message $message)
    {
        Laragram::sendMessage(
            $message->chat->id,
            null,
            "Settings menu. What would you like to configure?",
            reply_markup: [
                'inline_keyboard' => [
                    [
                        ['text' => 'Notifications', 'callback_data' => 'notifications'],
                        ['text' => 'Language', 'callback_data' => 'language']
                    ],
                    [['text' => 'Back', 'callback_data' => 'back']]
                ]
            ]
        );
        
        FSM::update('settings', $message->from->id);
    }
}

// Route definitions
FSM::route('start', [BotController::class, 'start']);
FSM::route('main_menu', [BotController::class, 'mainMenu']);
FSM::route('settings', [BotController::class, 'settings']);
FSM::route('help', [BotController::class, 'help']);
```

## Features

- State-based navigation
- Inline keyboard menus
- User state persistence
- Callback query handling
