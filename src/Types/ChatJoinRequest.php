<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ChatJoinRequest
 *
 *Represents a join request sent to a chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatjoinrequest
 */
class ChatJoinRequest extends Laragram
{
    /**
    * Chat to which the request was sent
    * @var Chat
    */
    public Chat $chat;

    /**
    * User that sent the join request
    * @var User
    */
    public User $from;

    /**
    * Date the request was sent in Unix time
    * @var int
    */
    public int $date;

    /**
    * *Optional*. Bio of the user.
    * @var string|null
    */
    public ?string $bio = null;

    /**
    * *Optional*. Chat invite link that was used by the user to send the join request
    * @var ChatInviteLink|null
    */
    public ?ChatInviteLink $invite_link = null;



    public function __construct($data)
    {
        $this->chat = new Chat($data['chat']);

        $this->from = new User($data['from']);

        $this->date = $data['date'];
        if (isset($data['bio'])){
            $this->bio = $data['bio'];
        }

        if (isset($data['invite_link'])){
            $this->invite_link = new ChatInviteLink($data['invite_link']);
        }

    }
}