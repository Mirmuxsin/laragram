<?php

namespace Milly\Laragram\Types;


/**
* ChatBoostSourceGiftCode
 *
 *<p>User for which the gift code was created</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatboostsourcegiftcode
 */
class ChatBoostSourceGiftCode
{
    /**
    * <p>Source of the boost, always “gift\_code”</p>
    * @var string
    */
    public string $source;

    /**
    * <p>User for which the gift code was created</p>
    * @var User
    */
    public User $user;



    public function __construct($data)
    {
        $this->source = $data['source'];
        $this->user = new User($data['user']);

    }
}