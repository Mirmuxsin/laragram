<?php

namespace Milly\Laragram\Types;


/**
* ReplyKeyboardMarkup
 *
 *<p>*Optional*. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the *text* of the <a href="https://core.telegram.org/bots/api/#message">Message</a> object; 2) if the bot's message is a reply (has *reply\<em>to\</em>message\_id*), sender of the original message.  </p><p>*Example:* A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#replykeyboardmarkup
 */
class ReplyKeyboardMarkup
{
    /**
    * <p>Array of button rows, each represented by an Array of <a href="https://core.telegram.org/bots/api/#keyboardbutton">KeyboardButton</a> objects</p>
    * @var array
    */
    public array $keyboard;

    /**
    * <p>*Optional*. Requests clients to always show the keyboard when the regular keyboard is hidden. Defaults to *false*, in which case the custom keyboard can be hidden and opened with a keyboard icon.</p>
    * @var bool|null
    */
    public ?bool $is_persistent = null;

    /**
    * <p>*Optional*. Requests clients to resize the keyboard vertically for optimal fit (e.g., make the keyboard smaller if there are just two rows of buttons). Defaults to *false*, in which case the custom keyboard is always of the same height as the app's standard keyboard.</p>
    * @var bool|null
    */
    public ?bool $resize_keyboard = null;

    /**
    * <p>*Optional*. Requests clients to hide the keyboard as soon as it's been used. The keyboard will still be available, but clients will automatically display the usual letter-keyboard in the chat - the user can press a special button in the input field to see the custom keyboard again. Defaults to *false*.</p>
    * @var bool|null
    */
    public ?bool $one_time_keyboard = null;

    /**
    * <p>*Optional*. The placeholder to be shown in the input field when the keyboard is active; 1-64 characters</p>
    * @var string|null
    */
    public ?string $input_field_placeholder = null;

    /**
    * <p>*Optional*. Use this parameter if you want to show the keyboard to specific users only. Targets: 1) users that are @mentioned in the *text* of the <a href="https://core.telegram.org/bots/api/#message">Message</a> object; 2) if the bot's message is a reply (has *reply\<em>to\</em>message\_id*), sender of the original message.  </p><p>*Example:* A user requests to change the bot's language, bot replies to the request with a keyboard to select the new language. Other users in the group don't see the keyboard.</p>
    * @var bool|null
    */
    public ?bool $selective = null;



    public function __construct($data)
    {
        $this->keyboard = $data['keyboard'];
        if (isset($data['is_persistent'])){
            $this->is_persistent = $data['is_persistent'];
        }

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