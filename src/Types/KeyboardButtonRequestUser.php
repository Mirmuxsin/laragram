<?php

namespace Milly\Laragram\Types;


/**
* KeyboardButtonRequestUser
 *
 *<p>*Optional*. Pass *True* to request a premium user, pass *False* to request a non-premium user. If not specified, no additional restrictions are applied.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#keyboardbuttonrequestuser
 */
class KeyboardButtonRequestUser
{
    /**
    * <p>Signed 32-bit identifier of the request, which will be received back in the <a href="https://core.telegram.org/bots/api/#usershared">UserShared</a> object. Must be unique within the message</p>
    * @var int
    */
    public int $request_id;

    /**
    * <p>*Optional*. Pass *True* to request a bot, pass *False* to request a regular user. If not specified, no additional restrictions are applied.</p>
    * @var bool|null
    */
    public ?bool $user_is_bot = null;

    /**
    * <p>*Optional*. Pass *True* to request a premium user, pass *False* to request a non-premium user. If not specified, no additional restrictions are applied.</p>
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