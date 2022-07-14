<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ChatMemberMember
 *
 *Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that has no additional privileges or restrictions.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmembermember
 */
class ChatMemberMember extends Laragram
{
    /**
    * The member's status in the chat, always “member”
    * @var string
    */
    public string $status;

    /**
    * Information about the user
    * @var User
    */
    public User $user;



    public function __construct($data)
    {
        $this->status = $data['status'];
        $this->user = new User($data['user']);

    }
}