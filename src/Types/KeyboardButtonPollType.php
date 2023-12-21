<?php

namespace Milly\Laragram\Types;


/**
* KeyboardButtonPollType
 *
 *<p>*Optional*. If *quiz* is passed, the user will be allowed to create only polls in the quiz mode. If *regular* is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#keyboardbuttonpolltype
 */
class KeyboardButtonPollType
{
    /**
    * <p>*Optional*. If *quiz* is passed, the user will be allowed to create only polls in the quiz mode. If *regular* is passed, only regular polls will be allowed. Otherwise, the user will be allowed to create a poll of any type.</p>
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