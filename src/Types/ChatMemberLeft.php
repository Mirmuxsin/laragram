<?php

namespace Milly\Laragram\Types;

/**
* ChatMemberLeft
 *
 *<p>Information about the user</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberleft
 */
class ChatMemberLeft
{
    /**
    * <p>The member's status in the chat, always “left”</p>
    * @var string
    */
    public string $status;

    /**
    * <p>Information about the user</p>
    * @var User
    */
    public User $user;



    public function __construct($data)
    {
        $this->status = $data['status'];
        $this->user = new User($data['user']);

    }
}