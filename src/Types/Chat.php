<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* Chat
 *
 *This object represents a chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chat
 */
class Chat extends Laragram
{
    /**
    * Unique identifier for this chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
    * @var int
    */
    public int $id;

    /**
    * Type of chat, can be either “private”, “group”, “supergroup” or “channel”
    * @var string
    */
    public string $type;

    /**
    * *Optional*. Title, for supergroups, channels and group chats
    * @var string|null
    */
    public ?string $title = null;

    /**
    * *Optional*. Username, for private chats, supergroups and channels if available
    * @var string|null
    */
    public ?string $username = null;

    /**
    * *Optional*. First name of the other party in a private chat
    * @var string|null
    */
    public ?string $first_name = null;

    /**
    * *Optional*. Last name of the other party in a private chat
    * @var string|null
    */
    public ?string $last_name = null;

    /**
    * *Optional*. Chat photo. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var ChatPhoto|null
    */
    public ?ChatPhoto $photo = null;

    /**
    * *Optional*. Bio of the other party in a private chat. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var string|null
    */
    public ?string $bio = null;

    /**
    * *Optional*. *True*, if privacy settings of the other party in the private chat allows to use `tg://user?id=<user_id>` links only in chats with the user. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var bool|null
    */
    public ?bool $has_private_forwards = null;

    /**
    * *Optional*. *True*, if users need to join the supergroup before they can send messages. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var bool|null
    */
    public ?bool $join_to_send_messages = null;

    /**
    * *Optional*. *True*, if all users directly joining the supergroup need to be approved by supergroup administrators. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var bool|null
    */
    public ?bool $join_by_request = null;

    /**
    * *Optional*. Description, for groups, supergroups and channel chats. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var string|null
    */
    public ?string $description = null;

    /**
    * *Optional*. Primary invite link, for groups, supergroups and channel chats. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var string|null
    */
    public ?string $invite_link = null;

    /**
    * *Optional*. The most recent pinned message (by sending date). Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var Message|null
    */
    public ?Message $pinned_message = null;

    /**
    * *Optional*. Default chat member permissions, for groups and supergroups. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var ChatPermissions|null
    */
    public ?ChatPermissions $permissions = null;

    /**
    * *Optional*. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var int|null
    */
    public ?int $slow_mode_delay = null;

    /**
    * *Optional*. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var int|null
    */
    public ?int $message_auto_delete_time = null;

    /**
    * *Optional*. *True*, if messages from the chat can't be forwarded to other chats. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var bool|null
    */
    public ?bool $has_protected_content = null;

    /**
    * *Optional*. For supergroups, name of group sticker set. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var string|null
    */
    public ?string $sticker_set_name = null;

    /**
    * *Optional*. *True*, if the bot can change the group sticker set. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var bool|null
    */
    public ?bool $can_set_sticker_set = null;

    /**
    * *Optional*. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var int|null
    */
    public ?int $linked_chat_id = null;

    /**
    * *Optional*. For supergroups, the location to which the supergroup is connected. Returned only in [getChat](https://core.telegram.org/bots/api/#getchat).
    * @var ChatLocation|null
    */
    public ?ChatLocation $location = null;



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

        if (isset($data['photo'])){
            $this->photo = new ChatPhoto($data['photo']);
        }

        if (isset($data['bio'])){
            $this->bio = $data['bio'];
        }

        if (isset($data['has_private_forwards'])){
            $this->has_private_forwards = $data['has_private_forwards'];
        }

        if (isset($data['join_to_send_messages'])){
            $this->join_to_send_messages = $data['join_to_send_messages'];
        }

        if (isset($data['join_by_request'])){
            $this->join_by_request = $data['join_by_request'];
        }

        if (isset($data['description'])){
            $this->description = $data['description'];
        }

        if (isset($data['invite_link'])){
            $this->invite_link = $data['invite_link'];
        }

        if (isset($data['pinned_message'])){
            $this->pinned_message = new Message($data['pinned_message']);
        }

        if (isset($data['permissions'])){
            $this->permissions = new ChatPermissions($data['permissions']);
        }

        if (isset($data['slow_mode_delay'])){
            $this->slow_mode_delay = $data['slow_mode_delay'];
        }

        if (isset($data['message_auto_delete_time'])){
            $this->message_auto_delete_time = $data['message_auto_delete_time'];
        }

        if (isset($data['has_protected_content'])){
            $this->has_protected_content = $data['has_protected_content'];
        }

        if (isset($data['sticker_set_name'])){
            $this->sticker_set_name = $data['sticker_set_name'];
        }

        if (isset($data['can_set_sticker_set'])){
            $this->can_set_sticker_set = $data['can_set_sticker_set'];
        }

        if (isset($data['linked_chat_id'])){
            $this->linked_chat_id = $data['linked_chat_id'];
        }

        if (isset($data['location'])){
            $this->location = new ChatLocation($data['location']);
        }

    }
}