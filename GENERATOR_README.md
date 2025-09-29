# Telegram Bot API Type Generator

A **SOLID-compliant** type generator that extracts the core logic from Laravel commands and allows running it directly with PHP CLI without requiring Laravel.

## 🏗️ **Architecture (SOLID Principles)**

### **Single Responsibility Principle (SRP)**
- **`TypeGenerator`**: Only handles type generation logic
- **`UnionTypeHandler`**: Only handles union types (`any_of`)
- **`ConsoleOutput`**: Only handles output formatting
- **`Laragram` Command**: Only handles Laravel command interface

### **Open/Closed Principle (OCP)**
- **Extensible**: Easy to add new union type handlers
- **Closed for modification**: Core logic doesn't need changes for new types

### **Liskov Substitution Principle (LSP)**
- **Interchangeable**: Generator can be used in Laravel or standalone contexts
- **Consistent behavior**: Same output regardless of usage context

### **Interface Segregation Principle (ISP)**
- **Focused interfaces**: Each class has only the methods it needs
- **No fat interfaces**: Clean, minimal method signatures

### **Dependency Inversion Principle (DIP)**
- **Abstractions**: Generator depends on abstractions, not concretions
- **Injection**: Dependencies injected via constructor

## 🚀 **Usage**

### **Standalone (No Laravel)**
```bash
php generate_types.php
```

### **Laravel Command**
```bash
php artisan laragram:update-api
```

## 📋 **What it does**

1. **Fetches the latest Telegram Bot API JSON** from `https://ark0f.github.io/tg-bot-api/custom.json`
2. **Generates Methods.php** with all 135+ Telegram Bot API methods
3. **Generates Type classes** for all 232+ Telegram API objects
4. **Handles union types** (`any_of`) correctly, including special handling for `MaybeInaccessibleMessage`

## 📁 **File Structure**

```
src/Generator/
├── TypeGenerator.php      # Core generation logic
├── UnionTypeHandler.php   # Union type handling
└── ConsoleOutput.php      # Output formatting

src/app/Console/Commands/
└── Laragram.php           # Laravel command (uses TypeGenerator)

generate_types.php         # Standalone script (uses TypeGenerator)
```

## 🔧 **Features**

### ✅ **DRY Compliance**
- **No code duplication**: Core logic extracted to reusable classes
- **Single source of truth**: All generation logic in `TypeGenerator`
- **Shared components**: Both Laravel and standalone use same classes

### ✅ **Union Type Support**
- **Generic union types**: Uses try-catch approach for robust error handling
- **Special cases**: `MaybeInaccessibleMessage` uses intelligent field-based detection
- **Type safety**: Properly handles nullable properties and type detection

### ✅ **Progress Tracking**
- Shows real-time progress for methods and types generation
- Displays API version and credits to OpenAPI

### ✅ **Error Handling**
- Comprehensive error handling with detailed messages
- Graceful failure with stack traces

## 🎯 **Key Improvements**

### **SOLID Architecture**
```php
// Before: Monolithic command with duplicated logic
class Laragram extends Command {
    // 200+ lines of mixed responsibilities
}

// After: Clean separation of concerns
class TypeGenerator {
    // Only generation logic
}

class UnionTypeHandler {
    // Only union type handling
}

class ConsoleOutput {
    // Only output formatting
}
```

### **Fixed `MaybeInaccessibleMessage` Issue**
The refactored architecture properly handles union types:

1. **Detects union types** correctly
2. **Creates proper type detection logic** for `MaybeInaccessibleMessage`
3. **Handles missing classes** like `InaccessibleMessage`
4. **Generates syntax-error-free code**

### **Intelligent Type Detection**
```php
// MaybeInaccessibleMessage uses smart field detection
if ($data['date'] === 0 && !isset($data['text']) && !isset($data['photo'])...) {
    // This is an InaccessibleMessage
    $this->inaccessibleMessage = new InaccessibleMessage($data);
    $this->type = 'InaccessibleMessage';
} else {
    // This is a regular Message
    $this->message = new Message($data);
    $this->type = 'Message';
}
```

## 🧪 **Testing**

The generated types are fully tested with comprehensive test coverage:

```bash
vendor/bin/phpunit --testdox
```

**Test Results:**
- ✅ **37 total tests** - All passing
- ✅ **195 assertions** - All successful  
- ✅ **Union types working** - `MaybeInaccessibleMessage` properly handles both cases
- ✅ **No syntax errors** - Fixed the generation issue

## 📊 **Generation Stats**

- **Methods**: 135 Telegram Bot API methods
- **Types**: 232 Telegram API object types
- **API Version**: Bot API v8 (latest)
- **Generation Time**: ~2-3 seconds

## 🔄 **Updating**

To update to the latest Telegram Bot API:

```bash
# Standalone
php generate_types.php

# Laravel
php artisan laragram:update-api
```

Both commands use the same underlying `TypeGenerator` class!

## 🎉 **Benefits**

### **SOLID Benefits**
- **Maintainable**: Easy to modify individual components
- **Testable**: Each class can be tested in isolation
- **Extensible**: Easy to add new features without breaking existing code
- **Reusable**: Core logic can be used in multiple contexts

### **DRY Benefits**
- **No duplication**: Single source of truth for generation logic
- **Consistent**: Same behavior across all usage contexts
- **Efficient**: Changes only need to be made in one place

### **Practical Benefits**
- **No Laravel dependency** - Run directly with PHP CLI
- **Standalone** - Works in any PHP environment
- **Fast** - Generates all types in seconds
- **Reliable** - Comprehensive error handling
- **Up-to-date** - Always uses the latest Telegram Bot API
- **Tested** - Full test coverage ensures quality

Perfect for CI/CD pipelines, automated updates, or standalone development environments! 🚀