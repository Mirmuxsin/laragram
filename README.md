<h1 align='center'><samp>LARAGRAM</samp></h1>
<h3 align='center'>
    <sup align='center'>Simple laravel package to use telegram bot API inside your laravel project</sup>

[//]: # (    <h6 align="center"><a href="">Check it out how easily you can send me a message</a></h6>)
</h3>
<p align='center'>
  <a href='https://github.com/Mirmuxsin/laragram/blob/master/license'><img alt="License" src="https://img.shields.io/github/license/mirmuxsin/laragram?color=%23fefefe&logo=github&logoColor=%23fefefe&style=flat-square"></a>
  <a href='https://packagist.org/packages/milly/laragram'><img alt="Packagist Version" src="https://img.shields.io/packagist/v/milly/laragram?color=%23fefefe&label=Laragram&logo=packagist&logoColor=%23fefefe&style=flat-square"></a>
  <a href='https://www.patreon.com/millykhamroev'><img alt="Packagist Version" src="https://img.shields.io/badge/Buy%20me%20a-coffee-%23fefefe?style=flat-square&logo=patreon&logoColor=%23fefefe"></a>
</p>

---
- [Features](#Features)
- [Installation](#Installation)
- [Usage](#Usage)
---

## Features

### It has every method of telegram bot api:
![img_1.png](img/img_1.png)

### Which are fully documented:
![img_2.png](img/img_2.png)

### Now you don't have to remember which property is in which object, because they are documented too):
![img_3.png](img/img_3.png)

### Which you can get directly throuhg your function:
![img_5.png](img/img_5.png)

### BTW, you can call many of them at once:
![img_6.png](img/img_6.png)

### It supports FSM-Routing:
![img_8.png](img/img_8.png)

---
## Installation

> This package requires PHP 8.0+

First, install Laragram package, and make sure that the database connection settings are correct!

```bash 
composer require milly/laragram
```

Then run these commands to publish assets and config

```bash
php artisan vendor:publish --provider="Milly\Laragram\LaragramServiceProvider"
```

Add your telegram bot token to .env

```bash
TELEGRAM_BOT_TOKEN=123456789:XXXXXXXXXXXXXXXXXXXXXXXXXXX
```

Run migration to be able to use FSM-Routing

```bash
php artisan migrate
```

If you want to get updates, set webhook to your adress (like domain.com/api/bot) where you handle updates

And here we go, you can start your bot now

---
## Usage:

- Methods:
    ```php
    use Milly\Laragram\Laragram;

    Laragram::sendMessage(
        123456789, // chat_id
        null, // message thread id
        "Hello world", // message text  
  );
- Objects:
    ```php
    use Milly\Laragram\Types\Message;
      
    // with variable
    $message = new Message();
    $text = $message->text;
  
    // inside the function
    function getText(Message $message) {
        $text = $message->text;
    }
    ```
- FSM Routing:
    ```php
    // routes/api.php
    use Milly\Laragram\FSM\FSM;
    use Milly\Laragram\Laragram;
  
    Route::post('/bot', function () {
  
       FSM::route('state_1', [SomeClass::class, 'someMethod']);
  
        FSM::route('state_2', function (Message $message) {
            Laragram::sendMessage(
                $message->chat->id,
                null,
                "Inside anonymous function"
            );
        });
    }
    ```


---

# 2.3 version

- Support for anonymous functions inside route definition

```php
// routes/laragram.php

use App\Http\Controllers\LaragramController;
use Milly\Laragram\FSM\FSM;
use \Milly\Laragram\Types\Message;
use \Milly\Laragram\Laragram;

FSM::route('', function (Message $message) {
    Laragram::sendMessage([
        $message->chat->id,
        null,
        "Inside anonymous function"
    );
}, [
  (new \Milly\Laragram\Types\Update())->message
]);
```

- State management now supports regexp as status

```php
// routes/laragram.php

//...
FSM::route('state_+', [SomeClass::class, 'someMethod']);
```
- minor fixes

### Use it inside laravel project as a package and you will be able to use all features, including:

- route middleware
- multi-lang
- guards
- CLI
- migration
- and others and others

---

### Changes:

- [Added specific routes](https://github.com/Mirmuxsin/laragram/commit/15d8339b776a1c7f27890fa432cac23aa7625772#diff-35fbaa003e989ec8dcb1ac861c7c592e8e4bda9e121395590e86c0ff2da8bd82)
- [Added config files](https://github.com/Mirmuxsin/laragram/commit/15d8339b776a1c7f27890fa432cac23aa7625772#diff-d27544c268b9ad05a341ea07100f640cab3a646464bb7ca6652ac0e579056722)
- [Added hints for IDE](https://github.com/Mirmuxsin/laragram/commit/ed072afacdb30da40d87447d8a30e17fc54b6d8f#diff-96559060a0c25e1a9513eb0545bebd99636c5f29e02ae6101ed0061de81e7d67)
