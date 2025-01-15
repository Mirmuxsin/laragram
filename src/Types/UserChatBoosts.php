<?php

namespace Milly\Laragram\Types;

/**
* UserChatBoosts
 *
 *<p>The list of boosts added to the chat by the user</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#userchatboosts
 */
class UserChatBoosts
{
    /**
    * <p>The list of boosts added to the chat by the user</p>
    * @var array
    */
    public array $boosts;



    public function __construct($data)
    {
        $this->boosts = $data['boosts'];
    }
}