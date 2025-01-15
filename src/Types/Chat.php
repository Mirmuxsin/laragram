<?php

namespace Milly\Laragram\Types;

/**
* Chat
 *
 *<p>*Optional*. *True*, if the supergroup chat is a forum (has <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups">topics</a> enabled)</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chat
 */
class Chat
{
    /**
    * <p>Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.</p>
    * @var int
    */
    public int $id;

    /**
    * <p>Type of the chat, can be either “private”, “group”, “supergroup” or “channel”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>*Optional*. Title, for supergroups, channels and group chats</p>
    * @var string|null
    */
    public ?string $title = null;

    /**
    * <p>*Optional*. Username, for private chats, supergroups and channels if available</p>
    * @var string|null
    */
    public ?string $username = null;

    /**
    * <p>*Optional*. First name of the other party in a private chat</p>
    * @var string|null
    */
    public ?string $first_name = null;

    /**
    * <p>*Optional*. Last name of the other party in a private chat</p>
    * @var string|null
    */
    public ?string $last_name = null;

    /**
    * <p>*Optional*. *True*, if the supergroup chat is a forum (has <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#topics-in-groups">topics</a> enabled)</p>
    * @var bool|null
    */
    public ?bool $is_forum = null;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->type = $data['type'];
        if (isset($data['title'])){
            $this->title = $data['title'];
        }

        if (isset($data['username'])){
            $this->username = $data['username'];
        }

        if (isset($data['first_name'])){
            $this->first_name = $data['first_name'];
        }

        if (isset($data['last_name'])){
            $this->last_name = $data['last_name'];
        }

        if (isset($data['is_forum'])){
            $this->is_forum = $data['is_forum'];
        }

    }
}