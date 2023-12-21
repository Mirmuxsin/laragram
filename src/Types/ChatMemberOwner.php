<?php

namespace Milly\Laragram\Types;


/**
* ChatMemberOwner
 *
 *<p>*Optional*. Custom title for this user</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberowner
 */
class ChatMemberOwner
{
    /**
    * <p>The member's status in the chat, always “creator”</p>
    * @var string
    */
    public string $status;

    /**
    * <p>Information about the user</p>
    * @var User
    */
    public User $user;

    /**
    * <p>*True*, if the user's presence in the chat is hidden</p>
    * @var bool
    */
    public bool $is_anonymous;

    /**
    * <p>*Optional*. Custom title for this user</p>
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