<?php

namespace Milly\Laragram\Types;

/**
* CopyTextButton
 *
 *<p>The text to be copied to the clipboard; 1-256 characters</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#copytextbutton
 */
class CopyTextButton
{
    /**
    * <p>The text to be copied to the clipboard; 1-256 characters</p>
    * @var string
    */
    public string $text;



    public function __construct($data)
    {
        $this->text = $data['text'];
    }
}