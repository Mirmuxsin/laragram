<?php

namespace Milly\Laragram\Types;


/**
* ChatMemberMember
 *
 *<p>Information about the user</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmembermember
 */
class ChatMemberMember
{
    /**
    * <p>The member's status in the chat, always “member”</p>
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