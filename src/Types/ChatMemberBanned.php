<?php

namespace Milly\Laragram\Types;


/**
* ChatMemberBanned
 *
 *<p>Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberbanned
 */
class ChatMemberBanned
{
    /**
    * <p>The member's status in the chat, always “kicked”</p>
    * @var string
    */
    public string $status;

    /**
    * <p>Information about the user</p>
    * @var User
    */
    public User $user;

    /**
    * <p>Date when restrictions will be lifted for this user; Unix time. If 0, then the user is banned forever</p>
    * @var int
    */
    public int $until_date;



    public function __construct($data)
    {
        $this->status = $data['status'];
        $this->user = new User($data['user']);

        $this->until_date = $data['until_date'];
    }
}