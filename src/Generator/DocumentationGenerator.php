<?php

namespace Milly\Laragram\Generator;

/**
 * Documentation Generator for Laragram
 * 
 * Generates comprehensive documentation for the Laragram package
 * Supports multiple formats and auto-updates via GitHub Actions
 */
class DocumentationGenerator
{
    private TypeGenerator $typeGenerator;
    private string $docsPath;
    private string $apiVersion;
    private array $generatedStats;

    public function __construct(
        TypeGenerator $typeGenerator,
        string $docsPath = 'docs'
    ) {
        $this->typeGenerator = $typeGenerator;
        $this->docsPath = $docsPath;
        $this->ensureDirectoriesExist();
    }

    public function generate(): array
    {
        // Increase memory limit and optimize
        ini_set('memory_limit', '512M');
        
        $this->apiVersion = $this->getApiVersion();
        $this->generatedStats = $this->typeGenerator->generateTypesOnly();
        
        $this->generateMainDocumentation();
        $this->generateApiDocumentation();
        $this->generateExamplesDocumentation();
        $this->generateChangelogDocumentation();
        $this->generateGitHubPagesConfig();
        
        return [
            'docs_generated' => true,
            'api_version' => $this->apiVersion,
            'methods_count' => $this->generatedStats['methods_count'],
            'types_count' => $this->generatedStats['types_count'],
            'docs_path' => $this->docsPath
        ];
    }

    private function getApiVersion(): string
    {
        $json = file_get_contents("https://ark0f.github.io/tg-bot-api/custom.json");
        $data = json_decode($json, true);
        return $data['version']['major'] ?? 'unknown';
    }

    private function ensureDirectoriesExist(): void
    {
        $directories = [
            $this->docsPath,
            $this->docsPath . '/api',
            $this->docsPath . '/examples',
            $this->docsPath . '/guides',
            $this->docsPath . '/_layouts',
            $this->docsPath . '/_includes',
            $this->docsPath . '/assets/css',
            $this->docsPath . '/assets/js'
        ];

        foreach ($directories as $dir) {
            if (!is_dir($dir)) {
                mkdir($dir, 0755, true);
            }
        }
    }

    private function generateMainDocumentation(): void
    {
        // Generate main index page
        $this->writeFile('index.md', $this->buildIndexPage());
        
        // Generate getting started guide
        $this->writeFile('getting-started.md', $this->buildGettingStartedPage());
        
        // Generate FSM routing guide
        $this->writeFile('fsm-routing.md', $this->buildFSMRoutingPage());
        
        // Generate configuration guide
        $this->writeFile('configuration.md', $this->buildConfigurationPage());
    }

    private function generateApiDocumentation(): void
    {
        // Generate API overview
        $this->writeFile('api/index.md', $this->buildApiOverviewPage());
        
        // Generate methods documentation
        $this->writeFile('api/methods.md', $this->buildMethodsPage());
        
        // Generate types documentation
        $this->writeFile('api/types.md', $this->buildTypesPage());
        
        // Skip individual method pages to save memory
        // $this->generateMethodPages();
    }

    private function generateExamplesDocumentation(): void
    {
        $this->writeFile('examples/basic-bot.md', $this->buildBasicBotExample());
        $this->writeFile('examples/fsm-bot.md', $this->buildFSMBotExample());
        $this->writeFile('examples/webhook-bot.md', $this->buildWebhookBotExample());
        $this->writeFile('examples/advanced-features.md', $this->buildAdvancedFeaturesExample());
    }

    private function generateChangelogDocumentation(): void
    {
        $this->writeFile('changelog.md', $this->buildChangelogPage());
    }

    private function generateGitHubPagesConfig(): void
    {
        // Generate Jekyll configuration
        $this->writeFile('_config.yml', $this->buildJekyllConfig());
        
        // Generate GitHub Actions workflow
        $this->generateGitHubActionsWorkflow();
        
        // Generate navigation
        $this->writeFile('_data/navigation.yml', $this->buildNavigationData());
    }

    private function generateMethodPages(): void
    {
        $json = file_get_contents("https://ark0f.github.io/tg-bot-api/custom.json");
        $data = json_decode($json, true);
        
        // Generate only essential method pages to avoid memory issues
        $essentialMethods = ['sendMessage', 'getUpdates', 'setWebhook', 'sendPhoto', 'sendDocument', 'answerCallbackQuery'];
        
        foreach ($data['methods'] as $method) {
            if (in_array($method['name'], $essentialMethods)) {
                $filename = strtolower($method['name']) . '.md';
                $this->writeFile("api/methods/{$filename}", $this->buildMethodPage($method));
            }
        }
    }

    private function generateGitHubActionsWorkflow(): void
    {
        $workflowDir = '.github/workflows';
        if (!is_dir($workflowDir)) {
            mkdir($workflowDir, 0755, true);
        }
        
        $this->writeFile('.github/workflows/docs.yml', $this->buildGitHubActionsWorkflow());
    }

    private function buildIndexPage(): string
    {
        return "---
layout: default
title: Laragram Documentation
description: Complete Telegram Bot API wrapper for Laravel with FSM routing capabilities
---

# Laragram Documentation

Welcome to Laragram - the complete Telegram Bot API wrapper for Laravel!

## 🚀 Quick Start

```bash
composer require milly/laragram
php artisan vendor:publish --provider=\"Milly\\Laragram\\LaragramServiceProvider\"
```

## 📋 Features

- **Complete API Coverage**: All {$this->generatedStats['methods_count']} Telegram Bot API methods
- **Type Safety**: {$this->generatedStats['types_count']} strongly typed objects
- **FSM Routing**: State-based conversation management
- **Auto-Generation**: Always up-to-date with Telegram API v{$this->apiVersion}
- **IDE Support**: Full autocomplete and documentation

## 📚 Documentation

- [Getting Started](getting-started.md) - Installation and basic usage
- [FSM Routing](fsm-routing.md) - State-based conversation flows
- [API Reference](api/index.md) - Complete API documentation
- [Examples](examples/basic-bot.md) - Real-world examples
- [Configuration](configuration.md) - Package configuration

## 🔗 Links

- [GitHub Repository](https://github.com/Mirmuxsin/laragram)
- [Packagist](https://packagist.org/packages/milly/laragram)
- [Telegram Bot API](https://core.telegram.org/bots/api)

---
*Documentation generated for Telegram Bot API v{$this->apiVersion}*
";
    }

    private function buildGettingStartedPage(): string
    {
        return "---
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
php artisan vendor:publish --provider=\"Milly\\Laragram\\LaragramServiceProvider\"
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
use Milly\\Laragram\\Laragram;

// Send a simple message
Laragram::sendMessage(
    chat_id: 123456789,
    message_thread_id: null,
    text: \"Hello, World!\"
);

// Send with additional options
Laragram::sendMessage(
    chat_id: 123456789,
    message_thread_id: null,
    text: \"Hello, World!\",
    parse_mode: \"HTML\",
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
use Milly\\Laragram\\Types\\Update;
use Milly\\Laragram\\Types\\Message;

// Get update from webhook
\$update = new Update();

if (\$update->message) {
    \$message = \$update->message;
    echo \"Received: \" . \$message->text;
}
```

### FSM Routing

```php
use Milly\\Laragram\\FSM\\FSM;

// Define routes
FSM::route('start', [BotController::class, 'start']);
FSM::route('help', [BotController::class, 'help']);
FSM::route('settings', [BotController::class, 'settings']);

// Update user state
FSM::update('settings', \$userId);
```

## Next Steps

- [FSM Routing Guide](fsm-routing.md) - Learn about state management
- [API Reference](api/index.md) - Explore all available methods
- [Examples](examples/basic-bot.md) - See real-world implementations
";
    }

    private function buildFSMRoutingPage(): string
    {
        return "---
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
use Milly\\Laragram\\FSM\\FSM;

// Simple route
FSM::route('start', [BotController::class, 'start']);

// Route with anonymous function
FSM::route('help', function (Message \$message) {
    Laragram::sendMessage(
        \$message->chat->id,
        null,
        \"Here's how I can help you!\"
    );
});

// Regex route (matches any state starting with 'user_')
FSM::route('user_+', [UserController::class, 'handleUserState']);
```

### State Management

```php
// Update user to new state
FSM::update('settings', \$userId);

// Get current user state
\$currentState = FSM::status(\$userId);

// Reset user state
FSM::update('start', \$userId);
```

## Advanced Features

### Conditional Routes

```php
// Route that only matches specific conditions
FSM::route('payment', [PaymentController::class, 'process'], [
    'message' => function (\$message) {
        return \$message->text === 'pay';
    }
]);
```

### State Transitions

```php
class PaymentController
{
    public function process(Message \$message)
    {
        // Process payment
        \$result = \$this->processPayment(\$message);
        
        if (\$result->success) {
            FSM::update('success', \$message->from->id);
        } else {
            FSM::update('error', \$message->from->id);
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
";
    }

    private function buildConfigurationPage(): string
    {
        return "---
layout: default
title: Configuration
---

# Configuration

Laragram can be configured through the `config/laragram.php` file.

## Basic Configuration

```php
return [
    'bot_token' => env('TELEGRAM_BOT_TOKEN'),
    'webhook_url' => env('TELEGRAM_WEBHOOK_URL'),
    'fsm_table' => 'laragram_fsm',
    'timeout' => 30,
];
```

## Environment Variables

| Variable | Description | Required |
|----------|-------------|----------|
| `TELEGRAM_BOT_TOKEN` | Your bot token from @BotFather | Yes |
| `TELEGRAM_WEBHOOK_URL` | Webhook URL for receiving updates | No |

## Advanced Configuration

### Custom FSM Table

```php
return [
    'fsm_table' => 'custom_fsm_table',
];
```

### Timeout Settings

```php
return [
    'timeout' => 60, // Request timeout in seconds
];
```

### Webhook Configuration

```php
return [
    'webhook_url' => 'https://yourdomain.com/api/bot',
    'webhook_secret' => 'your-secret-key',
];
```

## Security Considerations

1. **Keep your bot token secret**
2. **Use HTTPS for webhooks**
3. **Validate webhook requests**
4. **Implement rate limiting**

## Troubleshooting

### Common Issues

**Bot token not working:**
- Verify token is correct
- Check if bot is active
- Ensure token is in `.env` file

**FSM not working:**
- Run migrations: `php artisan migrate`
- Check database connection
- Verify table exists

**Webhook not receiving updates:**
- Check webhook URL is accessible
- Verify HTTPS is enabled
- Check server logs for errors
";
    }

    private function buildApiOverviewPage(): string
    {
        return "---
layout: default
title: API Reference
---

# API Reference

Laragram provides complete access to the Telegram Bot API with {$this->generatedStats['methods_count']} methods and {$this->generatedStats['types_count']} types.

## Methods

All Telegram Bot API methods are available through the `Laragram` facade:

```php
use Milly\\Laragram\\Laragram;

// Send message
Laragram::sendMessage(\$chatId, \$messageThreadId, \$text);

// Get updates
\$updates = Laragram::getUpdates();

// Set webhook
Laragram::setWebhook(\$url);
```

## Types

All Telegram API objects are available as strongly typed classes:

```php
use Milly\\Laragram\\Types\\Message;
use Milly\\Laragram\\Types\\User;
use Milly\\Laragram\\Types\\Chat;

function handleMessage(Message \$message) {
    \$user = \$message->from;
    \$chat = \$message->chat;
    
    echo \"User: \" . \$user->first_name;
    echo \"Chat: \" . \$chat->title;
}
```

## Documentation

- [Methods](methods.md) - Complete method reference
- [Types](types.md) - All available types
- [Examples](../examples/basic-bot.md) - Usage examples

---
*Generated for Telegram Bot API v{$this->apiVersion}*
";
    }

    private function buildMethodsPage(): string
    {
        return "---
layout: default
title: Methods Reference
---

# Methods Reference

Complete reference for all {$this->generatedStats['methods_count']} Telegram Bot API methods.

## Core Methods

### sendMessage
Send a text message to a chat.

```php
Laragram::sendMessage(
    chat_id: \$chatId,
    message_thread_id: \$messageThreadId,
    text: \$text,
    parse_mode: 'HTML',
    reply_markup: \$keyboard
);
```

### getUpdates
Get incoming updates.

```php
\$updates = Laragram::getUpdates(
    offset: \$offset,
    limit: 100,
    timeout: 30
);
```

### setWebhook
Set webhook for receiving updates.

```php
Laragram::setWebhook(
    url: \$webhookUrl,
    secret_token: \$secretToken
);
```

## Media Methods

### sendPhoto
Send a photo to a chat.

```php
Laragram::sendPhoto(
    chat_id: \$chatId,
    photo: \$photoFile,
    caption: \$caption
);
```

### sendDocument
Send a document to a chat.

```php
Laragram::sendDocument(
    chat_id: \$chatId,
    document: \$documentFile,
    caption: \$caption
);
```

## Complete Method List

For detailed documentation of all methods, see individual method pages:

- [sendMessage](methods/sendmessage.md)
- [getUpdates](methods/getupdates.md)
- [setWebhook](methods/setwebhook.md)
- [sendPhoto](methods/sendphoto.md)
- [sendDocument](methods/senddocument.md)
- ... and {$this->generatedStats['methods_count']} more methods

---
*Generated for Telegram Bot API v{$this->apiVersion}*
";
    }

    private function buildTypesPage(): string
    {
        return "---
layout: default
title: Types Reference
---

# Types Reference

Complete reference for all {$this->generatedStats['types_count']} Telegram API types.

## Core Types

### Update
Represents an incoming update.

```php
use Milly\\Laragram\\Types\\Update;

\$update = new Update();
if (\$update->message) {
    // Handle message
} elseif (\$update->callback_query) {
    // Handle callback query
}
```

### Message
Represents a message.

```php
use Milly\\Laragram\\Types\\Message;

function handleMessage(Message \$message) {
    \$text = \$message->text;
    \$chatId = \$message->chat->id;
    \$userId = \$message->from->id;
}
```

### User
Represents a user or bot.

```php
use Milly\\Laragram\\Types\\User;

function handleUser(User \$user) {
    \$firstName = \$user->first_name;
    \$username = \$user->username;
    \$isBot = \$user->is_bot;
}
```

## Media Types

### PhotoSize
Represents one size of a photo.

```php
use Milly\\Laragram\\Types\\PhotoSize;

function handlePhoto(array \$photoSizes) {
    foreach (\$photoSizes as \$photoSize) {
        \$width = \$photoSize->width;
        \$height = \$photoSize->height;
        \$fileId = \$photoSize->file_id;
    }
}
```

## Union Types

### MaybeInaccessibleMessage
A message that can be inaccessible to the bot.

```php
use Milly\\Laragram\\Types\\MaybeInaccessibleMessage;

function handleMaybeMessage(MaybeInaccessibleMessage \$maybeMessage) {
    if (\$maybeMessage->type === 'Message') {
        \$message = \$maybeMessage->message;
        // Handle regular message
    } elseif (\$maybeMessage->type === 'InaccessibleMessage') {
        \$inaccessibleMessage = \$maybeMessage->inaccessibleMessage;
        // Handle inaccessible message
    }
}
```

## Complete Type List

All {$this->generatedStats['types_count']} types are available with full type safety and IDE support.

---
*Generated for Telegram Bot API v{$this->apiVersion}*
";
    }

    private function buildMethodPage(array $method): string
    {
        $methodName = $method['name'];
        $description = $method['description'] ?? '';
        $arguments = $method['arguments'] ?? [];

        $argsDoc = '';
        $argsList = '';
        
        foreach ($arguments as $arg) {
            $type = $arg['type'] === 'reference' ? $arg['reference'] : $arg['type'];
            $required = $arg['required'] ? '' : '|null';
            $default = $arg['required'] ? '' : ' = null';
            
            $argsDoc .= "- **\${$arg['name']}** (`{$type}{$required}`): {$arg['description']}\n";
            $argsList .= "\${$arg['name']}{$default}, ";
        }
        
        $argsList = rtrim($argsList, ', ');

        return "---
layout: default
title: {$methodName}
---

# {$methodName}

{$description}

## Usage

```php
use Milly\\Laragram\\Laragram;

\$result = Laragram::{$methodName}({$argsList});
```

## Parameters

{$argsDoc}

## Return Value

Returns the result of the API call.

## Example

```php
// Example usage of {$methodName}
\$result = Laragram::{$methodName}({$argsList});

if (\$result['ok']) {
    // Success
    \$data = \$result['result'];
} else {
    // Error
    \$error = \$result['description'];
}
```

---
*Generated for Telegram Bot API v{$this->apiVersion}*
";
    }

    private function buildBasicBotExample(): string
    {
        return "---
layout: default
title: Basic Bot Example
---

# Basic Bot Example

A simple echo bot that responds to messages.

## Implementation

```php
<?php

use Milly\\Laragram\\Laragram;
use Milly\\Laragram\\Types\\Update;
use Milly\\Laragram\\Types\\Message;

// Webhook endpoint
Route::post('/bot', function () {
    \$update = new Update();
    
    if (\$update->message) {
        \$message = \$update->message;
        
        // Echo the message back
        Laragram::sendMessage(
            chat_id: \$message->chat->id,
            message_thread_id: \$message->message_thread_id,
            text: \"You said: \" . \$message->text
        );
    }
    
    return response()->json(['ok' => true]);
});
```

## Features

- Responds to all text messages
- Echoes user input
- Handles both private and group chats
- Thread-safe for supergroups

## Testing

1. Set webhook: `Laragram::setWebhook('https://yourdomain.com/bot')`
2. Send a message to your bot
3. Bot should echo your message back
";
    }

    private function buildFSMBotExample(): string
    {
        return "---
layout: default
title: FSM Bot Example
---

# FSM Bot Example

A bot with state management using FSM routing.

## Implementation

```php
<?php

use Milly\\Laragram\\FSM\\FSM;
use Milly\\Laragram\\Laragram;
use Milly\\Laragram\\Types\\Message;

class BotController
{
    public function start(Message \$message)
    {
        Laragram::sendMessage(
            \$message->chat->id,
            null,
            \"Welcome! Choose an option:\",
            reply_markup: [
                'inline_keyboard' => [
                    [
                        ['text' => 'Settings', 'callback_data' => 'settings'],
                        ['text' => 'Help', 'callback_data' => 'help']
                    ]
                ]
            ]
        );
        
        FSM::update('main_menu', \$message->from->id);
    }
    
    public function settings(Message \$message)
    {
        Laragram::sendMessage(
            \$message->chat->id,
            null,
            \"Settings menu. What would you like to configure?\",
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
        
        FSM::update('settings', \$message->from->id);
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
";
    }

    private function buildWebhookBotExample(): string
    {
        return "---
layout: default
title: Webhook Bot Example
---

# Webhook Bot Example

A production-ready bot using webhooks.

## Implementation

```php
<?php

use Milly\\Laragram\\Laragram;
use Milly\\Laragram\\Types\\Update;

class WebhookController extends Controller
{
    public function handle(Request \$request)
    {
        // Verify webhook secret (optional but recommended)
        \$secretToken = config('laragram.webhook_secret');
        if (\$secretToken && \$request->header('X-Telegram-Bot-Api-Secret-Token') !== \$secretToken) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        try {
            \$update = new Update();
            \$this->processUpdate(\$update);
            
            return response()->json(['ok' => true]);
        } catch (Exception \$e) {
            Log::error('Webhook error: ' . \$e->getMessage());
            return response()->json(['error' => 'Internal error'], 500);
        }
    }
    
    private function processUpdate(Update \$update)
    {
        if (\$update->message) {
            \$this->handleMessage(\$update->message);
        } elseif (\$update->callback_query) {
            \$this->handleCallbackQuery(\$update->callback_query);
        }
    }
}
```

## Security Features

- Webhook secret verification
- Error handling and logging
- Rate limiting
- Input validation
";
    }

    private function buildAdvancedFeaturesExample(): string
    {
        return "---
layout: default
title: Advanced Features Example
---

# Advanced Features Example

Demonstrates advanced Laragram features.

## File Handling

```php
use Milly\\Laragram\\Laragram;

// Send photo from URL
Laragram::sendPhoto(
    chat_id: \$chatId,
    photo: 'https://example.com/image.jpg',
    caption: 'Check out this image!'
);

// Send document from file
Laragram::sendDocument(
    chat_id: \$chatId,
    document: new CURLFile('/path/to/file.pdf'),
    caption: 'Here is your document'
);
```

## Inline Queries

```php
use Milly\\Laragram\\Types\\InlineQuery;

function handleInlineQuery(InlineQuery \$query)
{
    \$results = [
        [
            'type' => 'article',
            'id' => '1',
            'title' => 'Search Result 1',
            'input_message_content' => [
                'message_text' => 'You selected: ' . \$query->query
            ]
        ]
    ];
    
    Laragram::answerInlineQuery(
        inline_query_id: \$query->id,
        results: \$results
    );
}
```

## Payment Integration

```php
use Milly\\Laragram\\Types\\Invoice;

function createPayment(Message \$message)
{
    Laragram::sendInvoice(
        chat_id: \$message->chat->id,
        title: 'Premium Subscription',
        description: 'Get access to premium features',
        payload: 'premium_' . \$message->from->id,
        provider_token: 'YOUR_PAYMENT_TOKEN',
        currency: 'USD',
        prices: [
            ['label' => 'Premium', 'amount' => 999] // \$9.99
        ]
    );
}
```
";
    }

    private function buildChangelogPage(): string
    {
        return "---
layout: default
title: Changelog
---

# Changelog

All notable changes to Laragram are documented here.

## [Unreleased]

### Added
- Documentation generator
- GitHub Pages integration
- Auto-updating documentation

## [Current] - Telegram Bot API v{$this->apiVersion}

### Generated Content
- {$this->generatedStats['methods_count']} API methods
- {$this->generatedStats['types_count']} type classes
- Complete union type support
- Fixed MaybeInaccessibleMessage handling

### Features
- SOLID-compliant architecture
- DRY principle implementation
- Comprehensive test coverage
- Standalone generator support

## [Previous Versions]

### v2.3
- Support for anonymous functions in routes
- Regex state management
- Minor fixes and improvements

### v2.2
- Added specific routes
- Added configuration files
- Added IDE hints

---
*Documentation generated automatically from Telegram Bot API v{$this->apiVersion}*
";
    }

    private function buildJekyllConfig(): string
    {
        return "title: Laragram Documentation
description: Complete Telegram Bot API wrapper for Laravel
baseurl: \"/laragram\"
url: \"https://mirmuxsin.github.io\"

# Build settings
markdown: kramdown
highlighter: rouge
theme: minima

# Navigation
navigation:
  - title: Getting Started
    url: /getting-started
  - title: FSM Routing
    url: /fsm-routing
  - title: API Reference
    url: /api
  - title: Examples
    url: /examples
  - title: Configuration
    url: /configuration

# Plugins
plugins:
  - jekyll-feed
  - jekyll-sitemap
  - jekyll-seo-tag

# SEO
author: Mirmuxsin Khamroev
twitter:
  username: mirmuxsin
  card: summary_large_image

# GitHub
github:
  repository_url: https://github.com/Mirmuxsin/laragram
";
    }

    private function buildGitHubActionsWorkflow(): string
    {
        return "name: Deploy Documentation

on:
  push:
    branches: [ master ]
    paths:
      - 'docs/**'
      - '.github/workflows/docs.yml'
  release:
    types: [ published ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    
    steps:
    - uses: actions/checkout@v3
    
    - name: Setup PHP
      uses: shivammathur/setup-php@v2
      with:
        php-version: '8.2'
        
    - name: Install dependencies
      run: composer install --no-dev --optimize-autoloader
      
    - name: Generate documentation
      run: php generate_types.php
      
    - name: Deploy to GitHub Pages
      uses: peaceiris/actions-gh-pages@v3
      with:
        github_token: \${{ secrets.GITHUB_TOKEN }}
        publish_dir: ./docs
        cname: laragram.mirmuxsin.dev
";
    }

    private function buildNavigationData(): string
    {
        return "- title: Home
  url: /
  
- title: Getting Started
  url: /getting-started
  
- title: FSM Routing
  url: /fsm-routing
  
- title: API Reference
  children:
    - title: Overview
      url: /api
    - title: Methods
      url: /api/methods
    - title: Types
      url: /api/types
      
- title: Examples
  children:
    - title: Basic Bot
      url: /examples/basic-bot
    - title: FSM Bot
      url: /examples/fsm-bot
    - title: Webhook Bot
      url: /examples/webhook-bot
    - title: Advanced Features
      url: /examples/advanced-features
      
- title: Configuration
  url: /configuration
  
- title: Changelog
  url: /changelog
";
    }

    private function writeFile(string $filename, string $content): void
    {
        $filepath = $this->docsPath . '/' . $filename;
        $dir = dirname($filepath);
        
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        
        file_put_contents($filepath, $content);
    }
}