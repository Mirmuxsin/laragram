<?php

namespace Milly\Laragram\Types;

/**
* WebAppData
 *
 *<p>Text of the *web\_app* keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#webappdata
 */
class WebAppData
{
    /**
    * <p>The data. Be aware that a bad client can send arbitrary data in this field.</p>
    * @var string
    */
    public string $data;

    /**
    * <p>Text of the *web\_app* keyboard button from which the Web App was opened. Be aware that a bad client can send arbitrary data in this field.</p>
    * @var string
    */
    public string $button_text;



    public function __construct($data)
    {
        $this->data = $data['data'];
        $this->button_text = $data['button_text'];
    }
}