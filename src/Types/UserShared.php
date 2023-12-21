<?php

namespace Milly\Laragram\Types;


/**
* UserShared
 *
 *<p>Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#usershared
 */
class UserShared
{
    /**
    * <p>Identifier of the request</p>
    * @var int
    */
    public int $request_id;

    /**
    * <p>Identifier of the shared user. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the user and could be unable to use this identifier, unless the user is already known to the bot by some other means.</p>
    * @var int
    */
    public int $user_id;



    public function __construct($data)
    {
        $this->request_id = $data['request_id'];
        $this->user_id = $data['user_id'];
    }
}