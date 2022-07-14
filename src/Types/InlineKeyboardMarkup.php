<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InlineKeyboardMarkup
 *
 *This object represents an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating) that appears right next to the message it belongs to.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinekeyboardmarkup
 */
class InlineKeyboardMarkup extends Laragram
{
    /**
    * Array of button rows, each represented by an Array of [InlineKeyboardButton](https://core.telegram.org/bots/api/#inlinekeyboardbutton) objects
    * @var array
    */
    public array $inline_keyboard;



    public function __construct($data)
    {
        $this->inline_keyboard = $data['inline_keyboard'];
    }
}