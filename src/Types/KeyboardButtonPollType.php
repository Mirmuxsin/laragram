<?php

namespace Milly\Laragram\Types;


/**
* KeyboardButtonPollType
 *
 *This object represents type of a poll, which is allowed to be created and sent when the corresponding button is pressed.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#keyboardbuttonpolltype
 */
class KeyboardButtonPollType
{
    /**
    * *Optional*. If *quiz* is passed, the user will be allowed to create only polls in the quiz mode. If *regular* is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.
    * @var string|null
    */
    public ?string $type = null;



    public function __construct($data)
    {
        if (isset($data['type'])){
            $this->type = $data['type'];
        }

    }
}