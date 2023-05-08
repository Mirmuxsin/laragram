<?php

namespace Milly\Laragram\Types;


/**
* User
 *
 *This object represents a Telegram user or bot.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#user
 */
class User
{
    /**
    * Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.
    * @var int
    */
    public int $id;

    /**
    * *True*, if this user is a bot
    * @var bool
    */
    public bool $is_bot;

    /**
    * User's or bot's first name
    * @var string
    */
    public string $first_name;

    /**
    * *Optional*. User's or bot's last name
    * @var string|null
    */
    public ?string $last_name = null;

    /**
    * *Optional*. User's or bot's username
    * @var string|null
    */
    public ?string $username = null;

    /**
    * *Optional*. [IETF language tag](https://en.wikipedia.org/wiki/IETF_language_tag) of the user's language
    * @var string|null
    */
    public ?string $language_code = null;

    /**
    * *Optional*. *True*, if this user is a Telegram Premium user
    * @var bool|null
    */
    public ?bool $is_premium = null;

    /**
    * *Optional*. *True*, if this user added the bot to the attachment menu
    * @var bool|null
    */
    public ?bool $added_to_attachment_menu = null;

    /**
    * *Optional*. *True*, if the bot can be invited to groups. Returned only in [getMe](https://core.telegram.org/bots/api/#getme).
    * @var bool|null
    */
    public ?bool $can_join_groups = null;

    /**
    * *Optional*. *True*, if [privacy mode](https://core.telegram.org/bots/features#privacy-mode) is disabled for the bot. Returned only in [getMe](https://core.telegram.org/bots/api/#getme).
    * @var bool|null
    */
    public ?bool $can_read_all_group_messages = null;

    /**
    * *Optional*. *True*, if the bot supports inline queries. Returned only in [getMe](https://core.telegram.org/bots/api/#getme).
    * @var bool|null
    */
    public ?bool $supports_inline_queries = null;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->is_bot = $data['is_bot'];
        $this->first_name = $data['first_name'];
        if (isset($data['last_name'])){
            $this->last_name = $data['last_name'];
        }

        if (isset($data['username'])){
            $this->username = $data['username'];
        }

        if (isset($data['language_code'])){
            $this->language_code = $data['language_code'];
        }

        if (isset($data['is_premium'])){
            $this->is_premium = $data['is_premium'];
        }

        if (isset($data['added_to_attachment_menu'])){
            $this->added_to_attachment_menu = $data['added_to_attachment_menu'];
        }

        if (isset($data['can_join_groups'])){
            $this->can_join_groups = $data['can_join_groups'];
        }

        if (isset($data['can_read_all_group_messages'])){
            $this->can_read_all_group_messages = $data['can_read_all_group_messages'];
        }

        if (isset($data['supports_inline_queries'])){
            $this->supports_inline_queries = $data['supports_inline_queries'];
        }

    }
}