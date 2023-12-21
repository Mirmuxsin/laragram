<?php

namespace Milly\Laragram\Types;


/**
* User
 *
 *<p>*Optional*. *True*, if the bot supports inline queries. Returned only in <a href="https://core.telegram.org/bots/api/#getme">getMe</a>.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#user
 */
class User
{
    /**
    * <p>Unique identifier for this user or bot. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier.</p>
    * @var int
    */
    public int $id;

    /**
    * <p>*True*, if this user is a bot</p>
    * @var bool
    */
    public bool $is_bot;

    /**
    * <p>User's or bot's first name</p>
    * @var string
    */
    public string $first_name;

    /**
    * <p>*Optional*. User's or bot's last name</p>
    * @var string|null
    */
    public ?string $last_name = null;

    /**
    * <p>*Optional*. User's or bot's username</p>
    * @var string|null
    */
    public ?string $username = null;

    /**
    * <p>*Optional*. <a href="https://en.wikipedia.org/wiki/IETF<em>language</em>tag">IETF language tag</a> of the user's language</p>
    * @var string|null
    */
    public ?string $language_code = null;

    /**
    * <p>*Optional*. *True*, if this user is a Telegram Premium user</p>
    * @var bool|null
    */
    public ?bool $is_premium = null;

    /**
    * <p>*Optional*. *True*, if this user added the bot to the attachment menu</p>
    * @var bool|null
    */
    public ?bool $added_to_attachment_menu = null;

    /**
    * <p>*Optional*. *True*, if the bot can be invited to groups. Returned only in <a href="https://core.telegram.org/bots/api/#getme">getMe</a>.</p>
    * @var bool|null
    */
    public ?bool $can_join_groups = null;

    /**
    * <p>*Optional*. *True*, if <a href="https://core.telegram.org/bots/features#privacy-mode">privacy mode</a> is disabled for the bot. Returned only in <a href="https://core.telegram.org/bots/api/#getme">getMe</a>.</p>
    * @var bool|null
    */
    public ?bool $can_read_all_group_messages = null;

    /**
    * <p>*Optional*. *True*, if the bot supports inline queries. Returned only in <a href="https://core.telegram.org/bots/api/#getme">getMe</a>.</p>
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