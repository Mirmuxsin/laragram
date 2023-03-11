<?php

namespace Milly\Laragram\Types;


/**
* ChatPermissions
 *
 *Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatpermissions
 */
class ChatPermissions
{
    /**
    * *Optional*. *True*, if the user is allowed to send text messages, contacts, invoices, locations and venues
    * @var bool|null
    */
    public ?bool $can_send_messages = null;

    /**
    * *Optional*. *True*, if the user is allowed to send audios
    * @var bool|null
    */
    public ?bool $can_send_audios = null;

    /**
    * *Optional*. *True*, if the user is allowed to send documents
    * @var bool|null
    */
    public ?bool $can_send_documents = null;

    /**
    * *Optional*. *True*, if the user is allowed to send photos
    * @var bool|null
    */
    public ?bool $can_send_photos = null;

    /**
    * *Optional*. *True*, if the user is allowed to send videos
    * @var bool|null
    */
    public ?bool $can_send_videos = null;

    /**
    * *Optional*. *True*, if the user is allowed to send video notes
    * @var bool|null
    */
    public ?bool $can_send_video_notes = null;

    /**
    * *Optional*. *True*, if the user is allowed to send voice notes
    * @var bool|null
    */
    public ?bool $can_send_voice_notes = null;

    /**
    * *Optional*. *True*, if the user is allowed to send polls
    * @var bool|null
    */
    public ?bool $can_send_polls = null;

    /**
    * *Optional*. *True*, if the user is allowed to send animations, games, stickers and use inline bots
    * @var bool|null
    */
    public ?bool $can_send_other_messages = null;

    /**
    * *Optional*. *True*, if the user is allowed to add web page previews to their messages
    * @var bool|null
    */
    public ?bool $can_add_web_page_previews = null;

    /**
    * *Optional*. *True*, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups
    * @var bool|null
    */
    public ?bool $can_change_info = null;

    /**
    * *Optional*. *True*, if the user is allowed to invite new users to the chat
    * @var bool|null
    */
    public ?bool $can_invite_users = null;

    /**
    * *Optional*. *True*, if the user is allowed to pin messages. Ignored in public supergroups
    * @var bool|null
    */
    public ?bool $can_pin_messages = null;

    /**
    * *Optional*. *True*, if the user is allowed to create forum topics. If omitted defaults to the value of can\_pin\_messages
    * @var bool|null
    */
    public ?bool $can_manage_topics = null;



    public function __construct($data)
    {
        if (isset($data['can_send_messages'])){
            $this->can_send_messages = $data['can_send_messages'];
        }

        if (isset($data['can_send_audios'])){
            $this->can_send_audios = $data['can_send_audios'];
        }

        if (isset($data['can_send_documents'])){
            $this->can_send_documents = $data['can_send_documents'];
        }

        if (isset($data['can_send_photos'])){
            $this->can_send_photos = $data['can_send_photos'];
        }

        if (isset($data['can_send_videos'])){
            $this->can_send_videos = $data['can_send_videos'];
        }

        if (isset($data['can_send_video_notes'])){
            $this->can_send_video_notes = $data['can_send_video_notes'];
        }

        if (isset($data['can_send_voice_notes'])){
            $this->can_send_voice_notes = $data['can_send_voice_notes'];
        }

        if (isset($data['can_send_polls'])){
            $this->can_send_polls = $data['can_send_polls'];
        }

        if (isset($data['can_send_other_messages'])){
            $this->can_send_other_messages = $data['can_send_other_messages'];
        }

        if (isset($data['can_add_web_page_previews'])){
            $this->can_add_web_page_previews = $data['can_add_web_page_previews'];
        }

        if (isset($data['can_change_info'])){
            $this->can_change_info = $data['can_change_info'];
        }

        if (isset($data['can_invite_users'])){
            $this->can_invite_users = $data['can_invite_users'];
        }

        if (isset($data['can_pin_messages'])){
            $this->can_pin_messages = $data['can_pin_messages'];
        }

        if (isset($data['can_manage_topics'])){
            $this->can_manage_topics = $data['can_manage_topics'];
        }

    }
}