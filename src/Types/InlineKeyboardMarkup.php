<?php

namespace Milly\Laragram\Types;

/**
* InlineKeyboardMarkup
 *
 *<p>This object represents an <a href="https://core.telegram.org/bots/features#inline-keyboards">inline keyboard</a> that appears right next to the message it belongs to.</p>
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