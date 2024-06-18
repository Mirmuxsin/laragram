<?php

namespace Milly\Laragram\Types;


/**
* ChatPermissions
 *
 *<p>*Optional*. *True*, if the user is allowed to create forum topics. If omitted defaults to the value of can\<em>pin\</em>messages</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatpermissions
 */
class ChatPermissions
{
    /**
    * <p>*Optional*. *True*, if the user is allowed to send text messages, contacts, giveaways, giveaway winners, invoices, locations and venues</p>
    * @var bool|null
    */
    public ?bool $can_send_messages = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to send audios</p>
    * @var bool|null
    */
    public ?bool $can_send_audios = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to send documents</p>
    * @var bool|null
    */
    public ?bool $can_send_documents = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to send photos</p>
    * @var bool|null
    */
    public ?bool $can_send_photos = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to send videos</p>
    * @var bool|null
    */
    public ?bool $can_send_videos = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to send video notes</p>
    * @var bool|null
    */
    public ?bool $can_send_video_notes = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to send voice notes</p>
    * @var bool|null
    */
    public ?bool $can_send_voice_notes = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to send polls</p>
    * @var bool|null
    */
    public ?bool $can_send_polls = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to send animations, games, stickers and use inline bots</p>
    * @var bool|null
    */
    public ?bool $can_send_other_messages = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to add web page previews to their messages</p>
    * @var bool|null
    */
    public ?bool $can_add_web_page_previews = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to change the chat title, photo and other settings. Ignored in public supergroups</p>
    * @var bool|null
    */
    public ?bool $can_change_info = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to invite new users to the chat</p>
    * @var bool|null
    */
    public ?bool $can_invite_users = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to pin messages. Ignored in public supergroups</p>
    * @var bool|null
    */
    public ?bool $can_pin_messages = null;

    /**
    * <p>*Optional*. *True*, if the user is allowed to create forum topics. If omitted defaults to the value of can\<em>pin\</em>messages</p>
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