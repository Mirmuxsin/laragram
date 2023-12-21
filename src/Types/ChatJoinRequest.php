<?php

namespace Milly\Laragram\Types;


/**
* ChatJoinRequest
 *
 *<p>*Optional*. Chat invite link that was used by the user to send the join request</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatjoinrequest
 */
class ChatJoinRequest
{
    /**
    * <p>Chat to which the request was sent</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>User that sent the join request</p>
    * @var User
    */
    public User $from;

    /**
    * <p>Identifier of a private chat with the user who sent the join request. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot can use this identifier for 5 minutes to send messages until the join request is processed, assuming no other administrator contacted the user.</p>
    * @var int
    */
    public int $user_chat_id;

    /**
    * <p>Date the request was sent in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>*Optional*. Bio of the user.</p>
    * @var string|null
    */
    public ?string $bio = null;

    /**
    * <p>*Optional*. Chat invite link that was used by the user to send the join request</p>
    * @var ChatInviteLink|null
    */
    public ?ChatInviteLink $invite_link = null;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['chat_join_request'];
        $this->chat = new Chat($data['chat']);

        $this->from = new User($data['from']);

        $this->user_chat_id = $data['user_chat_id'];
        $this->date = $data['date'];
        if (isset($data['bio'])){
            $this->bio = $data['bio'];
        }

        if (isset($data['invite_link'])){
            $this->invite_link = new ChatInviteLink($data['invite_link']);
        }

    }
}