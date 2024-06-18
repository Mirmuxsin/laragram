<?php

namespace Milly\Laragram\Types;


/**
* BusinessConnection
 *
 *<p>True, if the connection is active</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#businessconnection
 */
class BusinessConnection
{
    /**
    * <p>Unique identifier of the business connection</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Business account user that created the business connection</p>
    * @var User
    */
    public User $user;

    /**
    * <p>Identifier of a private chat with the user who created the business connection. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.</p>
    * @var int
    */
    public int $user_chat_id;

    /**
    * <p>Date the connection was established in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>True, if the bot can act on behalf of the business account in chats that were active in the last 24 hours</p>
    * @var bool
    */
    public bool $can_reply;

    /**
    * <p>True, if the connection is active</p>
    * @var bool
    */
    public bool $is_enabled;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['business_connection'];
        $this->id = $data['id'];
        $this->user = new User($data['user']);

        $this->user_chat_id = $data['user_chat_id'];
        $this->date = $data['date'];
        $this->can_reply = $data['can_reply'];
        $this->is_enabled = $data['is_enabled'];
    }
}