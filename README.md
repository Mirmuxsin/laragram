<h1 align='center'><samp>LARAGRAM</samp></h1>
<h3 align='center'>
    <sup align='center'>Simple laravel package to use telegram bot API inside your laravel project</sup>
    <h6 align="center"><a href="">Check it out how easily you can send me a message</a></h6>
</h3>
<p align='center'>
  <a href='https://github.com/Mirmuxsin/laragram/blob/master/license'><img alt="License" src="https://img.shields.io/github/license/mirmuxsin/laragram?color=%23fefefe&logo=github&logoColor=%23fefefe&style=flat-square"></a>
  <a href='https://packagist.org/packages/milly/laragram'><img alt="Packagist Version" src="https://img.shields.io/packagist/v/milly/laragram?color=%23fefefe&label=Laragram&logo=packagist&logoColor=%23fefefe&style=flat-square"></a>
  <a href='https://www.patreon.com/millykhamroev'><img alt="Packagist Version" src="https://img.shields.io/badge/Buy%20me%20a-coffee-%23fefefe?style=flat-square&logo=patreon&logoColor=%23fefefe"></a>
</p>

- [Features](#Features)


## Features

### It has every method of telegram bot api:
![img_1.png](img_1.png)

### Which are fully documentated:
![img_2.png](img_2.png)

### Even update-objects (types) are documented:
![img_3.png](img_3.png)

### Which you can get directly throuhg your function:
![img_5.png](img_5.png)

### BTW, you can call many of them at once:
![img_6.png](img_6.png)

### Which supports FSM-Routing:
![img_8.png](img_8.png)

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

After running this command you can find config file in `config/laragram.php`. \
At last create `routes/laragram.php` and controller, \
and run this command to run application.

```bash
php artisan laragram:start
```

Sample:

```php
// routes/laragram.php

use App\Http\Controllers\LaragramController;
use Milly\Laragram\FSM\FSM;

FSM::route('', [LaragramController::class, 'start'], [
  (new \Milly\Laragram\Types\Update())->message
]);
```

```php
// LaragramController.php

namespace App\Http\LaragramController;

use Milly\Laragram\Laragram;
use Milly\Laragram\Types\Message;

class LaragramController extends Controller
{
    public static function start(Message $message)
    {
        $chat_id = $message->from->id;

        return Laragram::sendMessage([
            'chat_id' => $chat_id,
            'text' => 'Hello from laragram!'
        ]);
    }
}
```

---
# 

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
        'chat_id' => $message->chat->id,
        'text' => "Inside anonymous function"
    ]);
}, [
  (new \Milly\Laragram\Types\Update())->message
]);
```

- State management now supports regexp as status

```php
// routes/laragram.php

//...
FSM::route('state_+', [SomeClass::class, 'someMethod'] [
  (new \Milly\Laragram\Types\Update())->message
]);
```
- minor fixes
## Features

### First PHP telegram bot package which supports FSM-Routing:

> ![FSM-Routing](./img/fsm-routing.png) <br/><br/>
> ![Update types](./img/types.png)

### Using telegram bot api methods:

> ![Laragram bot api methods](./img/methods.png)

### All types and methods are documented so you can code easily with your IDE:

> ![Types](./img/img.png) <br/><br/>
> ![Hints](https://user-images.githubusercontent.com/88322285/181101799-9143e994-a746-4683-9b7a-0cbda79fb328.png)

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
