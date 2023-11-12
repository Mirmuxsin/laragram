<?php

namespace Milly\Laragram\Types;


/**
* Chat
 *
 *<p>*Optional*. For supergroups, the location to which the supergroup is connected. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
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
    * <p>Type of chat, can be either “private”, “group”, “supergroup” or “channel”</p>
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

    /**
    * <p>*Optional*. Chat photo. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var ChatPhoto|null
    */
    public ?ChatPhoto $photo = null;

    /**
    * <p>*Optional*. If non-empty, the list of all <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#collectible-usernames">active chat usernames</a>; for private chats, supergroups and channels. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var array|null
    */
    public ?array $active_usernames = null;

    /**
    * <p>*Optional*. Custom emoji identifier of emoji status of the other party in a private chat. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var string|null
    */
    public ?string $emoji_status_custom_emoji_id = null;

    /**
    * <p>*Optional*. Expiration date of the emoji status of the other party in a private chat in Unix time, if any. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var int|null
    */
    public ?int $emoji_status_expiration_date = null;

    /**
    * <p>*Optional*. Bio of the other party in a private chat. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var string|null
    */
    public ?string $bio = null;

    /**
    * <p>*Optional*. *True*, if privacy settings of the other party in the private chat allows to use `tg://user?id=<user_id>` links only in chats with the user. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var bool|null
    */
    public ?bool $has_private_forwards = null;

    /**
    * <p>*Optional*. *True*, if the privacy settings of the other party restrict sending voice and video note messages in the private chat. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var bool|null
    */
    public ?bool $has_restricted_voice_and_video_messages = null;

    /**
    * <p>*Optional*. *True*, if users need to join the supergroup before they can send messages. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var bool|null
    */
    public ?bool $join_to_send_messages = null;

    /**
    * <p>*Optional*. *True*, if all users directly joining the supergroup need to be approved by supergroup administrators. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var bool|null
    */
    public ?bool $join_by_request = null;

    /**
    * <p>*Optional*. Description, for groups, supergroups and channel chats. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var string|null
    */
    public ?string $description = null;

    /**
    * <p>*Optional*. Primary invite link, for groups, supergroups and channel chats. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var string|null
    */
    public ?string $invite_link = null;

    /**
    * <p>*Optional*. The most recent pinned message (by sending date). Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var Message|null
    */
    public ?Message $pinned_message = null;

    /**
    * <p>*Optional*. Default chat member permissions, for groups and supergroups. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var ChatPermissions|null
    */
    public ?ChatPermissions $permissions = null;

    /**
    * <p>*Optional*. For supergroups, the minimum allowed delay between consecutive messages sent by each unpriviledged user; in seconds. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var int|null
    */
    public ?int $slow_mode_delay = null;

    /**
    * <p>*Optional*. The time after which all messages sent to the chat will be automatically deleted; in seconds. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var int|null
    */
    public ?int $message_auto_delete_time = null;

    /**
    * <p>*Optional*. *True*, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var bool|null
    */
    public ?bool $has_aggressive_anti_spam_enabled = null;

    /**
    * <p>*Optional*. *True*, if non-administrators can only get the list of bots and administrators in the chat. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var bool|null
    */
    public ?bool $has_hidden_members = null;

    /**
    * <p>*Optional*. *True*, if messages from the chat can't be forwarded to other chats. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var bool|null
    */
    public ?bool $has_protected_content = null;

    /**
    * <p>*Optional*. For supergroups, name of group sticker set. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var string|null
    */
    public ?string $sticker_set_name = null;

    /**
    * <p>*Optional*. *True*, if the bot can change the group sticker set. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var bool|null
    */
    public ?bool $can_set_sticker_set = null;

    /**
    * <p>*Optional*. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
    * @var int|null
    */
    public ?int $linked_chat_id = null;

    /**
    * <p>*Optional*. For supergroups, the location to which the supergroup is connected. Returned only in <a href="https://core.telegram.org/bots/api/#getchat">getChat</a>.</p>
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

        if (isset($data['is_forum'])){
            $this->is_forum = $data['is_forum'];
        }

        if (isset($data['photo'])){
            $this->photo = new ChatPhoto($data['photo']);
        }

        if (isset($data['active_usernames'])){
            $this->active_usernames = $data['active_usernames'];
        }

        if (isset($data['emoji_status_custom_emoji_id'])){
            $this->emoji_status_custom_emoji_id = $data['emoji_status_custom_emoji_id'];
        }

        if (isset($data['emoji_status_expiration_date'])){
            $this->emoji_status_expiration_date = $data['emoji_status_expiration_date'];
        }

        if (isset($data['bio'])){
            $this->bio = $data['bio'];
        }

        if (isset($data['has_private_forwards'])){
            $this->has_private_forwards = $data['has_private_forwards'];
        }

        if (isset($data['has_restricted_voice_and_video_messages'])){
            $this->has_restricted_voice_and_video_messages = $data['has_restricted_voice_and_video_messages'];
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

        if (isset($data['has_aggressive_anti_spam_enabled'])){
            $this->has_aggressive_anti_spam_enabled = $data['has_aggressive_anti_spam_enabled'];
        }

        if (isset($data['has_hidden_members'])){
            $this->has_hidden_members = $data['has_hidden_members'];
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