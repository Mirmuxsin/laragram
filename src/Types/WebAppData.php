<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* WebAppData
 *
 *Describes data sent from a [Web App](https://core.telegram.org/bots/webapps) to the bot.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#webappdata
 */
class WebAppData extends Laragram
{
    /**
    * The data. Be aware that a bad client can send arbitrary data in this field.
    * @var string
    */
    public string $data;

    /**
    * Text of the *web\_app* keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.
    * @var string
    */
    public string $button_text;



    public function __construct($data)
    {
        $this->data = $data['data'];
        $this->button_text = $data['button_text'];
    }
}