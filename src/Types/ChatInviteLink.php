<?php

namespace Milly\Laragram\Types;


/**
* ChatInviteLink
 *
 *Represents an invite link for a chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatinvitelink
 */
class ChatInviteLink
{
    /**
    * The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.
    * @var string
    */
    public string $invite_link;

    /**
    * Creator of the link
    * @var User
    */
    public User $creator;

    /**
    * *True*, if users joining the chat via the link need to be approved by chat administrators
    * @var bool
    */
    public bool $creates_join_request;

    /**
    * *True*, if the link is primary
    * @var bool
    */
    public bool $is_primary;

    /**
    * *True*, if the link is revoked
    * @var bool
    */
    public bool $is_revoked;

    /**
    * *Optional*. Invite link name
    * @var string|null
    */
    public ?string $name = null;

    /**
    * *Optional*. Point in time (Unix timestamp) when the link will expire or has been expired
    * @var int|null
    */
    public ?int $expire_date = null;

    /**
    * *Optional*. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999
    * @var int|null
    */
    public ?int $member_limit = null;

    /**
    * *Optional*. Number of pending join requests created using this link
    * @var int|null
    */
    public ?int $pending_join_request_count = null;



    public function __construct($data)
    {
        $this->invite_link = $data['invite_link'];
        $this->creator = new User($data['creator']);

        $this->creates_join_request = $data['creates_join_request'];
        $this->is_primary = $data['is_primary'];
        $this->is_revoked = $data['is_revoked'];
        if (isset($data['name'])){
            $this->name = $data['name'];
        }

        if (isset($data['expire_date'])){
            $this->expire_date = $data['expire_date'];
        }

        if (isset($data['member_limit'])){
            $this->member_limit = $data['member_limit'];
        }

        if (isset($data['pending_join_request_count'])){
            $this->pending_join_request_count = $data['pending_join_request_count'];
        }

    }
}