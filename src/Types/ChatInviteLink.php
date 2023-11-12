<?php

namespace Milly\Laragram\Types;


/**
* ChatInviteLink
 *
 *<p>*Optional*. Number of pending join requests created using this link</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatinvitelink
 */
class ChatInviteLink
{
    /**
    * <p>The invite link. If the link was created by another chat administrator, then the second part of the link will be replaced with “…”.</p>
    * @var string
    */
    public string $invite_link;

    /**
    * <p>Creator of the link</p>
    * @var User
    */
    public User $creator;

    /**
    * <p>*True*, if users joining the chat via the link need to be approved by chat administrators</p>
    * @var bool
    */
    public bool $creates_join_request;

    /**
    * <p>*True*, if the link is primary</p>
    * @var bool
    */
    public bool $is_primary;

    /**
    * <p>*True*, if the link is revoked</p>
    * @var bool
    */
    public bool $is_revoked;

    /**
    * <p>*Optional*. Invite link name</p>
    * @var string|null
    */
    public ?string $name = null;

    /**
    * <p>*Optional*. Point in time (Unix timestamp) when the link will expire or has been expired</p>
    * @var int|null
    */
    public ?int $expire_date = null;

    /**
    * <p>*Optional*. The maximum number of users that can be members of the chat simultaneously after joining the chat via this invite link; 1-99999</p>
    * @var int|null
    */
    public ?int $member_limit = null;

    /**
    * <p>*Optional*. Number of pending join requests created using this link</p>
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