<?php

namespace Milly\Laragram\Types;

/**
* KeyboardButtonRequestUsers
 *
 *<p>*Optional*. Pass *True* to request the users' photos</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#keyboardbuttonrequestusers
 */
class KeyboardButtonRequestUsers
{
    /**
    * <p>Signed 32-bit identifier of the request that will be received back in the <a href="https://core.telegram.org/bots/api/#usersshared">UsersShared</a> object. Must be unique within the message</p>
    * @var int
    */
    public int $request_id;

    /**
    * <p>*Optional*. Pass *True* to request bots, pass *False* to request regular users. If not specified, no additional restrictions are applied.</p>
    * @var bool|null
    */
    public ?bool $user_is_bot = null;

    /**
    * <p>*Optional*. Pass *True* to request premium users, pass *False* to request non-premium users. If not specified, no additional restrictions are applied.</p>
    * @var bool|null
    */
    public ?bool $user_is_premium = null;

    /**
    * <p>*Optional*. The maximum number of users to be selected; 1-10. Defaults to 1.</p>
    * @var int|null
    */
    public ?int $max_quantity = null;

    /**
    * <p>*Optional*. Pass *True* to request the users' first and last names</p>
    * @var bool|null
    */
    public ?bool $request_name = null;

    /**
    * <p>*Optional*. Pass *True* to request the users' usernames</p>
    * @var bool|null
    */
    public ?bool $request_username = null;

    /**
    * <p>*Optional*. Pass *True* to request the users' photos</p>
    * @var bool|null
    */
    public ?bool $request_photo = null;



    public function __construct($data)
    {
        $this->request_id = $data['request_id'];
        if (isset($data['user_is_bot'])){
            $this->user_is_bot = $data['user_is_bot'];
        }

        if (isset($data['user_is_premium'])){
            $this->user_is_premium = $data['user_is_premium'];
        }

        if (isset($data['max_quantity'])){
            $this->max_quantity = $data['max_quantity'];
        }

        if (isset($data['request_name'])){
            $this->request_name = $data['request_name'];
        }

        if (isset($data['request_username'])){
            $this->request_username = $data['request_username'];
        }

        if (isset($data['request_photo'])){
            $this->request_photo = $data['request_photo'];
        }

    }
}