<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ChatMemberLeft
 *
 *Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that isn't currently a member of the chat, but may join it themselves.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberleft
 */
class ChatMemberLeft extends Laragram
{
    /**
    * The member's status in the chat, always “left”
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