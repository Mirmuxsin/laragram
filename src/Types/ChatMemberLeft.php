<?php

namespace Milly\Laragram\Types;

/**
* ChatMemberLeft
 *
 *<p>Represents a <a href="https://core.telegram.org/bots/api/#chatmember">chat member</a> that isn't currently a member of the chat, but may join it themselves.</p>
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