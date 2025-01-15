<?php

namespace Milly\Laragram\Types;

/**
* ChatMemberMember
 *
 *<p>*Optional*. Date when the user's subscription will expire; Unix time</p>
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

    /**
    * <p>*Optional*. Date when the user's subscription will expire; Unix time</p>
    * @var int|null
    */
    public ?int $until_date = null;



    public function __construct($data)
    {
        $this->status = $data['status'];
        $this->user = new User($data['user']);

        if (isset($data['until_date'])){
            $this->until_date = $data['until_date'];
        }

    }
}