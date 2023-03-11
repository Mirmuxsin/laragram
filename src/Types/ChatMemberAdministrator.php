<?php

namespace Milly\Laragram\Types;


/**
* ChatMemberAdministrator
 *
 *Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that has some additional privileges.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberadministrator
 */
class ChatMemberAdministrator
{
    /**
    * The member's status in the chat, always “administrator”
    * @var string
    */
    public string $status;

    /**
    * Information about the user
    * @var User
    */
    public User $user;

    /**
    * *True*, if the bot is allowed to edit administrator privileges of that user
    * @var bool
    */
    public bool $can_be_edited;

    /**
    * *True*, if the user's presence in the chat is hidden
    * @var bool
    */
    public bool $is_anonymous;

    /**
    * *True*, if the administrator can access the chat event log, chat statistics, message statistics in channels, see channel members, see anonymous administrators in supergroups and ignore slow mode. Implied by any other administrator privilege
    * @var bool
    */
    public bool $can_manage_chat;

    /**
    * *True*, if the administrator can delete messages of other users
    * @var bool
    */
    public bool $can_delete_messages;

    /**
    * *True*, if the administrator can manage video chats
    * @var bool
    */
    public bool $can_manage_video_chats;

    /**
    * *True*, if the administrator can restrict, ban or unban chat members
    * @var bool
    */
    public bool $can_restrict_members;

    /**
    * *True*, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)
    * @var bool
    */
    public bool $can_promote_members;

    /**
    * *True*, if the user is allowed to change the chat title, photo and other settings
    * @var bool
    */
    public bool $can_change_info;

    /**
    * *True*, if the user is allowed to invite new users to the chat
    * @var bool
    */
    public bool $can_invite_users;

    /**
    * *Optional*. *True*, if the administrator can post in the channel; channels only
    * @var bool|null
    */
    public ?bool $can_post_messages = null;

    /**
    * *Optional*. *True*, if the administrator can edit messages of other users and can pin messages; channels only
    * @var bool|null
    */
    public ?bool $can_edit_messages = null;

    /**
    * *Optional*. *True*, if the user is allowed to pin messages; groups and supergroups only
    * @var bool|null
    */
    public ?bool $can_pin_messages = null;

    /**
    * *Optional*. *True*, if the user is allowed to create, rename, close, and reopen forum topics; supergroups only
    * @var bool|null
    */
    public ?bool $can_manage_topics = null;

    /**
    * *Optional*. Custom title for this user
    * @var string|null
    */
    public ?string $custom_title = null;



    public function __construct($data)
    {
        $this->status = $data['status'];
        $this->user = new User($data['user']);

        $this->can_be_edited = $data['can_be_edited'];
        $this->is_anonymous = $data['is_anonymous'];
        $this->can_manage_chat = $data['can_manage_chat'];
        $this->can_delete_messages = $data['can_delete_messages'];
        $this->can_manage_video_chats = $data['can_manage_video_chats'];
        $this->can_restrict_members = $data['can_restrict_members'];
        $this->can_promote_members = $data['can_promote_members'];
        $this->can_change_info = $data['can_change_info'];
        $this->can_invite_users = $data['can_invite_users'];
        if (isset($data['can_post_messages'])){
            $this->can_post_messages = $data['can_post_messages'];
        }

        if (isset($data['can_edit_messages'])){
            $this->can_edit_messages = $data['can_edit_messages'];
        }

        if (isset($data['can_pin_messages'])){
            $this->can_pin_messages = $data['can_pin_messages'];
        }

        if (isset($data['can_manage_topics'])){
            $this->can_manage_topics = $data['can_manage_topics'];
        }

        if (isset($data['custom_title'])){
            $this->custom_title = $data['custom_title'];
        }

    }
}