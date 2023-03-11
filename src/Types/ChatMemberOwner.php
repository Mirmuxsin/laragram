<?php

namespace Milly\Laragram\Types;


/**
* ChatMemberOwner
 *
 *Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that owns the chat and has all administrator privileges.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberowner
 */
class ChatMemberOwner
{
    /**
    * The member's status in the chat, always “creator”
    * @var string
    */
    public string $status;

    /**
    * Information about the user
    * @var User
    */
    public User $user;

    /**
    * *True*, if the user's presence in the chat is hidden
    * @var bool
    */
    public bool $is_anonymous;

    /**
    * *Optional*. Custom title for this user
    * @var string|null
    */
    public ?string $custom_title = null;



    public function __construct($data)
    {
        $this->status = $data['status'];
        $this->user = new User($data['user']);

        $this->is_anonymous = $data['is_anonymous'];
        if (isset($data['custom_title'])){
            $this->custom_title = $data['custom_title'];
        }

    }
}