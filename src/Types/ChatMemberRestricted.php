<?php

namespace Milly\Laragram\Types;


/**
* ChatMemberRestricted
 *
 *<p>Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberrestricted
 */
class ChatMemberRestricted
{
    /**
    * <p>The member's status in the chat, always “restricted”</p>
    * @var string
    */
    public string $status;

    /**
    * <p>Information about the user</p>
    * @var User
    */
    public User $user;

    /**
    * <p>*True*, if the user is a member of the chat at the moment of the request</p>
    * @var bool
    */
    public bool $is_member;

    /**
    * <p>*True*, if the user is allowed to send text messages, contacts, invoices, locations and venues</p>
    * @var bool
    */
    public bool $can_send_messages;

    /**
    * <p>*True*, if the user is allowed to send audios</p>
    * @var bool
    */
    public bool $can_send_audios;

    /**
    * <p>*True*, if the user is allowed to send documents</p>
    * @var bool
    */
    public bool $can_send_documents;

    /**
    * <p>*True*, if the user is allowed to send photos</p>
    * @var bool
    */
    public bool $can_send_photos;

    /**
    * <p>*True*, if the user is allowed to send videos</p>
    * @var bool
    */
    public bool $can_send_videos;

    /**
    * <p>*True*, if the user is allowed to send video notes</p>
    * @var bool
    */
    public bool $can_send_video_notes;

    /**
    * <p>*True*, if the user is allowed to send voice notes</p>
    * @var bool
    */
    public bool $can_send_voice_notes;

    /**
    * <p>*True*, if the user is allowed to send polls</p>
    * @var bool
    */
    public bool $can_send_polls;

    /**
    * <p>*True*, if the user is allowed to send animations, games, stickers and use inline bots</p>
    * @var bool
    */
    public bool $can_send_other_messages;

    /**
    * <p>*True*, if the user is allowed to add web page previews to their messages</p>
    * @var bool
    */
    public bool $can_add_web_page_previews;

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
    * <p>*True*, if the user is allowed to pin messages</p>
    * @var bool
    */
    public bool $can_pin_messages;

    /**
    * <p>*True*, if the user is allowed to create forum topics</p>
    * @var bool
    */
    public bool $can_manage_topics;

    /**
    * <p>Date when restrictions will be lifted for this user; Unix time. If 0, then the user is restricted forever</p>
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