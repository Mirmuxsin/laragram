<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ChatPermissions
 *
 *Describes actions that a non-administrator user is allowed to take in a chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatpermissions
 */
class ChatPermissions extends Laragram
{
    /**
    * *Optional*. *True*, if the user is allowed to send text messages, contacts, locations and venues
    * @var bool|null
    */
    public ?bool $can_send_messages = null;

    /**
    * *Optional*. *True*, if the user is allowed to send audios, documents, photos, videos, video notes and voice notes, implies can\_send\_messages
    * @var bool|null
    */
    public ?bool $can_send_media_messages = null;

    /**
    * *Optional*. *True*, if the user is allowed to send polls, implies can\_send\_messages
    * @var bool|null
    */
    public ?bool $can_send_polls = null;

    /**
    * *Optional*. *True*, if the user is allowed to send animations, games, stickers and use inline bots, implies can\_send\_media\_messages
    * @var bool|null
    */
    public ?bool $can_send_other_messages = null;

    /**
    * *Optional*. *True*, if the user is allowed to add web page previews to their messages, implies can\_send\_media\_messages
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



    public function __construct($data)
    {
        if (isset($data['can_send_messages'])){
            $this->can_send_messages = $data['can_send_messages'];
        }

        if (isset($data['can_send_media_messages'])){
            $this->can_send_media_messages = $data['can_send_media_messages'];
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

    }
}