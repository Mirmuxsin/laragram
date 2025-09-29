<?php

namespace Milly\Laragram\Types;

/**
* ForceReply
 *
 *<p>Upon receiving a message with this object, Telegram clients will display a reply interface to the user (act as if the user has selected the bot's message and tapped 'Reply'). This can be extremely useful if you want to create user-friendly step-by-step interfaces without having to sacrifice <a href="https://core.telegram.org/bots/features#privacy-mode">privacy mode</a>. Not supported in channels and for messages sent on behalf of a Telegram Business account.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#forcereply
 */
class ForceReply
{
    /**
    * <p>Shows reply interface to the user, as if they manually selected the bot's message and tapped 'Reply'</p>
    * @var bool
    */
    public bool $force_reply;

    /**
    * <p>*Optional*. The placeholder to be shown in the input field when the reply is active; 1-64 characters</p>
    * @var string|null
    */
    public ?string $input_field_placeholder = null;

    /**
    * <p>*Optional*. Use this parameter if you want to force reply from specific users only. Targets: 1) users that are @mentioned in the *text* of the <a href="https://core.telegram.org/bots/api/#message">Message</a> object; 2) if the bot's message is a reply to a message in the same chat and forum topic, sender of the original message.</p>
    * @var bool|null
    */
    public ?bool $selective = null;



    public function __construct($data)
    {
        $this->force_reply = $data['force_reply'];
        if (isset($data['input_field_placeholder'])){
            $this->input_field_placeholder = $data['input_field_placeholder'];
        }

        if (isset($data['selective'])){
            $this->selective = $data['selective'];
        }

    }
}