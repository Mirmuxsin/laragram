<?php

namespace Milly\Laragram\Types;

/**
* InlineKeyboardMarkup
 *
 *<p>Array of button rows, each represented by an Array of <a href="https://core.telegram.org/bots/api/#inlinekeyboardbutton">InlineKeyboardButton</a> objects</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinekeyboardmarkup
 */
class InlineKeyboardMarkup
{
    /**
    * <p>Array of button rows, each represented by an Array of <a href="https://core.telegram.org/bots/api/#inlinekeyboardbutton">InlineKeyboardButton</a> objects</p>
    * @var array
    */
    public array $inline_keyboard;



    public function __construct($data)
    {
        $this->inline_keyboard = $data['inline_keyboard'];
    }
}