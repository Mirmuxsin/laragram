<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ChatMemberRestricted
 *
 *Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that is under certain restrictions in the chat. Supergroups only.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberrestricted
 */
class ChatMemberRestricted extends Laragram
{
    /**
    * The member's status in the chat, always “restricted”
    * @var string
    */
    public string $status;

    /**
    * Information about the user
    * @var User
    */
    public User $user;

    /**
    * *True*, if the user is a member of the chat at the moment of the request
    * @var bool
    */
    public bool $is_member;

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
    * *True*, if the user is allowed to pin messages
    * @var bool
    */
    public bool $can_pin_messages;

    /**
    * *True*, if the user is allowed to send text messages, contacts, locations and venues
    * @var bool
    */
    public bool $can_send_messages;

    /**
    * *True*, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes
    * @var bool
    */
    public bool $can_send_media_messages;

    /**
    * *True*, if the user is allowed to send polls
    * @var bool
    */
    public bool $can_send_polls;

    /**
    * *True*, if the user is allowed to send animations, games, stickers and use inline bots
    * @var bool
    */
    public bool $can_send_other_messages;

    /**
    * *True*, if the user is allowed to add web page previews to their messages
    * @var bool
    */
    public bool $can_add_web_page_previews;

    /**
    * Date when restrictions will be lifted for this user; unix time. If 0, then the user is restricted forever
    * @var int
    */
    public int $until_date;



    public function __construct($data)
    {
        $this->status = $data['status'];
        $this->user = new User($data['user']);

        $this->is_member = $data['is_member'];
        $this->can_change_info = $data['can_change_info'];
        $this->can_invite_users = $data['can_invite_users'];
        $this->can_pin_messages = $data['can_pin_messages'];
        $this->can_send_messages = $data['can_send_messages'];
        $this->can_send_media_messages = $data['can_send_media_messages'];
        $this->can_send_polls = $data['can_send_polls'];
        $this->can_send_other_messages = $data['can_send_other_messages'];
        $this->can_add_web_page_previews = $data['can_add_web_page_previews'];
        $this->until_date = $data['until_date'];
    }
}