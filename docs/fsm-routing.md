---
layout: default
title: FSM Routing
---

# FSM Routing

FSM (Finite State Machine) routing allows you to create conversational bots with state management.

## Concepts

### States
A state represents the current context of a user's conversation. Users can be in different states like:
- `start` - Initial state
- `settings` - User is configuring settings
- `payment` - User is making a payment
- `support` - User is in support mode

### Routes
Routes define what happens when a user is in a specific state and sends a message.

## Basic Usage

### Defining Routes

```php
use Milly\Laragram\FSM\FSM;

// Simple route
FSM::route('start', [BotController::class, 'start']);

// Route with anonymous function
FSM::route('help', function (Message $message) {
    Laragram::sendMessage(
        $message->chat->id,
        null,
        "Here's how I can help you!"
    );
});

// Regex route (matches any state starting with 'user_')
FSM::route('user_+', [UserController::class, 'handleUserState']);
```

### State Management

```php
// Update user to new state
FSM::update('settings', $userId);

// Get current user state
$currentState = FSM::status($userId);

// Reset user state
FSM::update('start', $userId);
```

## Advanced Features

### Conditional Routes

```php
// Route that only matches specific conditions
FSM::route('payment', [PaymentController::class, 'process'], [
    'message' => function ($message) {
        return $message->text === 'pay';
    }
]);
```

### State Transitions

```php
class PaymentController
{
    public function process(Message $message)
    {
        // Process payment
        $result = $this->processPayment($message);
        
        if ($result->success) {
            FSM::update('success', $message->from->id);
        } else {
            FSM::update('error', $message->from->id);
        }
    }
}
```

## Best Practices

1. **Use descriptive state names**: `user_profile_editing` instead of `state1`
2. **Handle unknown states**: Always have a fallback route
3. **Reset states**: Clear user state when appropriate
4. **Use regex sparingly**: Only for dynamic state patterns

## Examples

See [FSM Bot Example](examples/fsm-bot.md) for a complete implementation.
