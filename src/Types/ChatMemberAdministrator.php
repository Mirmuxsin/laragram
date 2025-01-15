<?php

namespace Milly\Laragram\Types;

/**
* ChatMemberAdministrator
 *
 *<p>*Optional*. Custom title for this user</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberadministrator
 */
class ChatMemberAdministrator
{
    /**
    * <p>The member's status in the chat, always “administrator”</p>
    * @var string
    */
    public string $status;

    /**
    * <p>Information about the user</p>
    * @var User
    */
    public User $user;

    /**
    * <p>*True*, if the bot is allowed to edit administrator privileges of that user</p>
    * @var bool
    */
    public bool $can_be_edited;

    /**
    * <p>*True*, if the user's presence in the chat is hidden</p>
    * @var bool
    */
    public bool $is_anonymous;

    /**
    * <p>*True*, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report spam messages and ignore slow mode. Implied by any other administrator privilege.</p>
    * @var bool
    */
    public bool $can_manage_chat;

    /**
    * <p>*True*, if the administrator can delete messages of other users</p>
    * @var bool
    */
    public bool $can_delete_messages;

    /**
    * <p>*True*, if the administrator can manage video chats</p>
    * @var bool
    */
    public bool $can_manage_video_chats;

    /**
    * <p>*True*, if the administrator can restrict, ban or unban chat members, or access supergroup statistics</p>
    * @var bool
    */
    public bool $can_restrict_members;

    /**
    * <p>*True*, if the administrator can add new administrators with a subset of their own privileges or demote administrators that they have promoted, directly or indirectly (promoted by administrators that were appointed by the user)</p>
    * @var bool
    */
    public bool $can_promote_members;

    /**
    * <p>*True*, if the user is allowed to change the chat title, photo and other settings</p>
    * @var bool
    */
    public bool $can_change_info;

    /**
    * <p>*True*, if the user is allowed to invite new users to the chat</p>
    * @var bool
    */
    public bool $can_invite_users;

    /**
    * <p>*True*, if the administrator can post stories to the chat</p>
    * @var bool
    */
    public bool $can_post_stories;

    /**
    * <p>*True*, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access the chat's story archive</p>
    * @var bool
    */
    public bool $can_edit_stories;

    /**
    * <p>*True*, if the administrator can delete stories posted by other users</p>
    * @var bool
    */
    public bool $can_delete_stories;

    /**
    * <p>*Optional*. *True*, if the administrator can post messages in the channel, or access channel statistics; for channels only</p>
    * @var bool|null
    */
    public ?bool $can_post_messages = null;

    /**
    * <p>*Optional*. *True*, if the administrator can edit messages of other users and can pin messages; for channels only</p>
    * @var bool|null
    */
    public ?bool $can_edit_messages = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to pin messages; for groups and supergroups only</p>
    * @var bool|null
    */
    public ?bool $can_pin_messages = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to create, rename, close, and reopen forum topics; for supergroups only</p>
    * @var bool|null
    */
    public ?bool $can_manage_topics = null;

    /**
    * <p>*Optional*. Custom title for this user</p>
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
        $this->can_post_stories = $data['can_post_stories'];
        $this->can_edit_stories = $data['can_edit_stories'];
        $this->can_delete_stories = $data['can_delete_stories'];
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