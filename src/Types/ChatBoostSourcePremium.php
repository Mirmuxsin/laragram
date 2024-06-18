<?php

namespace Milly\Laragram\Types;


/**
* ChatBoostSourcePremium
 *
 *<p>User that boosted the chat</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatboostsourcepremium
 */
class ChatBoostSourcePremium
{
    /**
    * <p>Source of the boost, always “premium”</p>
    * @var string
    */
    public string $source;

    /**
    * <p>User that boosted the chat</p>
    * @var User
    */
    public User $user;



    public function __construct($data)
    {
        $this->source = $data['source'];
        $this->user = new User($data['user']);

    }
}