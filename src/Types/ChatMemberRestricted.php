<?php

namespace Milly\Laragram\Types;


/**
* ChatMemberRestricted
 *
 *Represents a [chat member](https://core.telegram.org/bots/api/#chatmember) that is under certain restrictions in the chat. Supergroups only.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberrestricted
 */
class ChatMemberRestricted
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
    * *True*, if the user is allowed to send text messages, contacts, invoices, locations and venues
    * @var bool
    */
    public bool $can_send_messages;

    /**
    * *True*, if the user is allowed to send audios
    * @var bool
    */
    public bool $can_send_audios;

    /**
    * *True*, if the user is allowed to send documents
    * @var bool
    */
    public bool $can_send_documents;

    /**
    * *True*, if the user is allowed to send photos
    * @var bool
    */
    public bool $can_send_photos;

    /**
    * *True*, if the user is allowed to send videos
    * @var bool
    */
    public bool $can_send_videos;

    /**
    * *True*, if the user is allowed to send video notes
    * @var bool
    */
    public bool $can_send_video_notes;

    /**
    * *True*, if the user is allowed to send voice notes
    * @var bool
    */
    public bool $can_send_voice_notes;

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
    * *True*, if the user is allowed to create forum topics
    * @var bool
    */
    public bool $can_manage_topics;

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
        $this->can_send_messages = $data['can_send_messages'];
        $this->can_send_audios = $data['can_send_audios'];
        $this->can_send_documents = $data['can_send_documents'];
        $this->can_send_photos = $data['can_send_photos'];
        $this->can_send_videos = $data['can_send_videos'];
        $this->can_send_video_notes = $data['can_send_video_notes'];
        $this->can_send_voice_notes = $data['can_send_voice_notes'];
        $this->can_send_polls = $data['can_send_polls'];
        $this->can_send_other_messages = $data['can_send_other_messages'];
        $this->can_add_web_page_previews = $data['can_add_web_page_previews'];
        $this->can_change_info = $data['can_change_info'];
        $this->can_invite_users = $data['can_invite_users'];
        $this->can_pin_messages = $data['can_pin_messages'];
        $this->can_manage_topics = $data['can_manage_topics'];
        $this->until_date = $data['until_date'];
    }
}