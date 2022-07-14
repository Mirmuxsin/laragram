<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ChatMemberBanned
 *
 *Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberbanned
 */
class ChatMemberBanned extends Laragram
{
    /**
    * The member's status in the chat, always “kicked”
    * @var string
    */
    public string $status;

    /**
    * Information about the user
    * @var User
    */
    public User $user;

    /**
    * Date when restrictions will be lifted for this user; unix time. If 0, then the user is banned forever
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