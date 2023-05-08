<?php

namespace Milly\Laragram\Types;


/**
* KeyboardButtonRequestUser
 *
 *This object defines the criteria used to request a suitable user. The identifier of the selected user will be shared with the bot when the corresponding button is pressed.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#keyboardbuttonrequestuser
 */
class KeyboardButtonRequestUser
{
    /**
    * Signed 32-bit identifier of the request, which will be received back in the [UserShared](https://core.telegram.org/bots/api/#usershared) object. Must be unique within the message
    * @var int
    */
    public int $request_id;

    /**
    * *Optional*. Pass *True* to request a bot, pass *False* to request a regular user. If not specified, no additional restrictions are applied.
    * @var bool|null
    */
    public ?bool $user_is_bot = null;

    /**
    * *Optional*. Pass *True* to request a premium user, pass *False* to request a non-premium user. If not specified, no additional restrictions are applied.
    * @var bool|null
    */
    public ?bool $user_is_premium = null;



    public function __construct($data)
    {
        $this->request_id = $data['request_id'];
        if (isset($data['user_is_bot'])){
            $this->user_is_bot = $data['user_is_bot'];
        }

        if (isset($data['user_is_premium'])){
            $this->user_is_premium = $data['user_is_premium'];
        }

    }
}