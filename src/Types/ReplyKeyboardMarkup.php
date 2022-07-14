<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ReplyKeyboardMarkup
 *
 *This object represents a [custom keyboard](https://core.telegram.org/bots#keyboards) with reply options (see [Introduction to bots](https://core.telegram.org/bots#keyboards) for details and examples).
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#replykeyboardmarkup
 */
class ReplyKeyboardMarkup extends Laragram
{
    /**
    * Array of button rows, each represented by an Array of [KeyboardButton](https://core.telegram.org/bots/api/#keyboardbutton) objects
    * @var array
    */
    public array $keyboard;

    /**
    * *Optional*. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to *false*, in which case the custom keyboard is always of the same height as the app's standard keyboard.
    * @var bool|null
    */
    public ?bool $resize_keyboard = null;

    /**
    * *Optional*. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat - the user can press a special button in the input field to see the custom keyboard again. Defaults to *false*.
    * @var bool|null
    */
    public ?bool $one_time_keyboard = null;

    /**
    * *Optional*. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters
    * @var string|null
    */
    public ?string $input_field_placeholder = null;

    /**
    * *Optional*. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](https://core.telegram.org/bots/api/#message) object; 2) if the bot's message is a reply (has *reply\_to\_message\_id*), sender of the original message.  

*Example:* A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.
    * @var bool|null
    */
    public ?bool $selective = null;



    public function __construct($data)
    {
        $this->keyboard = $data['keyboard'];
        if (isset($data['resize_keyboard'])){
            $this->resize_keyboard = $data['resize_keyboard'];
        }

        if (isset($data['one_time_keyboard'])){
            $this->one_time_keyboard = $data['one_time_keyboard'];
        }

        if (isset($data['input_field_placeholder'])){
            $this->input_field_placeholder = $data['input_field_placeholder'];
        }

        if (isset($data['selective'])){
            $this->selective = $data['selective'];
        }

    }
}