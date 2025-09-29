# Laragram - AI Agent Instructions

## Project Overview
Laragram is a Laravel package that provides a complete Telegram Bot API wrapper with FSM (Finite State Machine) routing capabilities. It allows developers to build Telegram bots within Laravel applications with full type safety and IDE support.

## Key Components

### 1. Core Classes
- **`Laragram`**: Main facade class extending `Methods` for Telegram API calls
- **`Methods`**: Auto-generated class containing all Telegram Bot API methods (185+ methods)
- **`FSM`**: Finite State Machine router for handling user states and conversation flows
- **`Types`**: Auto-generated type classes (185+ types) representing Telegram API objects

### 2. Architecture
- **Namespace**: `Milly\Laragram`
- **Service Provider**: `LaragramServiceProvider` handles package registration
- **Database**: Uses `laragram_fsm` table for state management
- **Configuration**: `config/laragram.php` for bot token and settings

### 3. Key Features
- **Full Telegram API Coverage**: All Bot API methods and types
- **FSM Routing**: State-based conversation management with regex support
- **Type Safety**: Strongly typed objects with IDE autocomplete
- **Auto-Generation**: CLI command to update API methods/types from Telegram
- **Long Polling**: Built-in long polling support for development

## Usage Patterns

### Basic API Calls
```php
use Milly\Laragram\Laragram;

// Send message
Laragram::sendMessage($chat_id, $message_thread_id, "Hello world");

// Get updates
$updates = Laragram::getUpdates();
```

### FSM Routing
```php
use Milly\Laragram\FSM\FSM;

// Route by state
FSM::route('home', [UserController::class, 'start']);
FSM::route('state_+', [UserController::class, 'handleState']); // Regex support

// Update user state
FSM::update('new_state', $user_id);
```

### Type Usage
```php
use Milly\Laragram\Types\Message;

function handleMessage(Message $message) {
    $text = $message->text;
    $chatId = $message->chat->id;
}
```

## Development Guidelines

### When Working with This Project:
1. **Preserve Auto-Generated Code**: Don't manually edit `Methods.php` or `Types/*.php` files
2. **Use CLI for Updates**: Run `php artisan laragram:update-api` to sync with Telegram API
3. **State Management**: Use FSM for conversation flows, not manual state tracking
4. **Type Safety**: Always use typed parameters in route handlers
5. **Configuration**: Bot token goes in `.env` as `TELEGRAM_BOT_TOKEN`

### Common Tasks:
- **Adding Routes**: Define in `routes/laragram.php` using `FSM::route()`
- **State Updates**: Use `FSM::update()` to change user states
- **API Calls**: Use `Laragram::methodName()` for all Telegram API calls
- **Development**: Use `php artisan laragram:start` for local testing

### File Structure:
- `src/Laragram.php` - Main facade
- `src/FSM/FSM.php` - State machine router
- `src/Methods/Methods.php` - Auto-generated API methods
- `src/Types/` - Auto-generated type classes
- `src/app/Models/FSM.php` - Database model for states
- `src/config/laragram.php` - Package configuration

## Important Notes
- Package requires PHP 8.0+
- Uses Guzzle HTTP client for API requests
- Supports both webhook and long polling modes
- Database migration required for FSM functionality
- All Telegram Bot API methods are available through the `Laragram` facade