<?php

namespace Milly\Laragram\Types;


/**
* ChatFullInfo
 *
 *<p>*Optional*. For supergroups, the location to which the supergroup is connected</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatfullinfo
 */
class ChatFullInfo
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

    /**
    * <p>Identifier of the accent color for the chat name and backgrounds of the chat photo, reply header, and link preview. See <a href="https://core.telegram.org/bots/api/#accent-colors">accent colors</a> for more details.</p>
    * @var int
    */
    public int $accent_color_id;

    /**
    * <p>The maximum number of reactions that can be set on a message in the chat</p>
    * @var int
    */
    public int $max_reaction_count;

    /**
    * <p>*Optional*. Chat photo</p>
    * @var ChatPhoto|null
    */
    public ?ChatPhoto $photo = null;

    /**
    * <p>*Optional*. If non-empty, the list of all <a href="https://telegram.org/blog/topics-in-groups-collectible-usernames#collectible-usernames">active chat usernames</a>; for private chats, supergroups and channels</p>
    * @var array|null
    */
    public ?array $active_usernames = null;

    /**
    * <p>*Optional*. For private chats, the date of birth of the user</p>
    * @var Birthdate|null
    */
    public ?Birthdate $birthdate = null;

    /**
    * <p>*Optional*. For private chats with business accounts, the intro of the business</p>
    * @var BusinessIntro|null
    */
    public ?BusinessIntro $business_intro = null;

    /**
    * <p>*Optional*. For private chats with business accounts, the location of the business</p>
    * @var BusinessLocation|null
    */
    public ?BusinessLocation $business_location = null;

    /**
    * <p>*Optional*. For private chats with business accounts, the opening hours of the business</p>
    * @var BusinessOpeningHours|null
    */
    public ?BusinessOpeningHours $business_opening_hours = null;

    /**
    * <p>*Optional*. For private chats, the personal channel of the user</p>
    * @var Chat|null
    */
    public ?Chat $personal_chat = null;

    /**
    * <p>*Optional*. List of available reactions allowed in the chat. If omitted, then all <a href="https://core.telegram.org/bots/api/#reactiontypeemoji">emoji reactions</a> are allowed.</p>
    * @var array|null
    */
    public ?array $available_reactions = null;

    /**
    * <p>*Optional*. Custom emoji identifier of the emoji chosen by the chat for the reply header and link preview background</p>
    * @var string|null
    */
    public ?string $background_custom_emoji_id = null;

    /**
    * <p>*Optional*. Identifier of the accent color for the chat's profile background. See <a href="https://core.telegram.org/bots/api/#profile-accent-colors">profile accent colors</a> for more details.</p>
    * @var int|null
    */
    public ?int $profile_accent_color_id = null;

    /**
    * <p>*Optional*. Custom emoji identifier of the emoji chosen by the chat for its profile background</p>
    * @var string|null
    */
    public ?string $profile_background_custom_emoji_id = null;

    /**
    * <p>*Optional*. Custom emoji identifier of the emoji status of the chat or the other party in a private chat</p>
    * @var string|null
    */
    public ?string $emoji_status_custom_emoji_id = null;

    /**
    * <p>*Optional*. Expiration date of the emoji status of the chat or the other party in a private chat, in Unix time, if any</p>
    * @var int|null
    */
    public ?int $emoji_status_expiration_date = null;

    /**
    * <p>*Optional*. Bio of the other party in a private chat</p>
    * @var string|null
    */
    public ?string $bio = null;

    /**
    * <p>*Optional*. *True*, if privacy settings of the other party in the private chat allows to use `tg://user?id=<user_id>` links only in chats with the user</p>
    * @var bool|null
    */
    public ?bool $has_private_forwards = null;

    /**
    * <p>*Optional*. *True*, if the privacy settings of the other party restrict sending voice and video note messages in the private chat</p>
    * @var bool|null
    */
    public ?bool $has_restricted_voice_and_video_messages = null;

    /**
    * <p>*Optional*. *True*, if users need to join the supergroup before they can send messages</p>
    * @var bool|null
    */
    public ?bool $join_to_send_messages = null;

    /**
    * <p>*Optional*. *True*, if all users directly joining the supergroup without using an invite link need to be approved by supergroup administrators</p>
    * @var bool|null
    */
    public ?bool $join_by_request = null;

    /**
    * <p>*Optional*. Description, for groups, supergroups and channel chats</p>
    * @var string|null
    */
    public ?string $description = null;

    /**
    * <p>*Optional*. Primary invite link, for groups, supergroups and channel chats</p>
    * @var string|null
    */
    public ?string $invite_link = null;

    /**
    * <p>*Optional*. The most recent pinned message (by sending date)</p>
    * @var Message|null
    */
    public ?Message $pinned_message = null;

    /**
    * <p>*Optional*. Default chat member permissions, for groups and supergroups</p>
    * @var ChatPermissions|null
    */
    public ?ChatPermissions $permissions = null;

    /**
    * <p>*Optional*. For supergroups, the minimum allowed delay between consecutive messages sent by each unprivileged user; in seconds</p>
    * @var int|null
    */
    public ?int $slow_mode_delay = null;

    /**
    * <p>*Optional*. For supergroups, the minimum number of boosts that a non-administrator user needs to add in order to ignore slow mode and chat permissions</p>
    * @var int|null
    */
    public ?int $unrestrict_boost_count = null;

    /**
    * <p>*Optional*. The time after which all messages sent to the chat will be automatically deleted; in seconds</p>
    * @var int|null
    */
    public ?int $message_auto_delete_time = null;

    /**
    * <p>*Optional*. *True*, if aggressive anti-spam checks are enabled in the supergroup. The field is only available to chat administrators.</p>
    * @var bool|null
    */
    public ?bool $has_aggressive_anti_spam_enabled = null;

    /**
    * <p>*Optional*. *True*, if non-administrators can only get the list of bots and administrators in the chat</p>
    * @var bool|null
    */
    public ?bool $has_hidden_members = null;

    /**
    * <p>*Optional*. *True*, if messages from the chat can't be forwarded to other chats</p>
    * @var bool|null
    */
    public ?bool $has_protected_content = null;

    /**
    * <p>*Optional*. *True*, if new chat members will have access to old messages; available only to chat administrators</p>
    * @var bool|null
    */
    public ?bool $has_visible_history = null;

    /**
    * <p>*Optional*. For supergroups, name of the group sticker set</p>
    * @var string|null
    */
    public ?string $sticker_set_name = null;

    /**
    * <p>*Optional*. *True*, if the bot can change the group sticker set</p>
    * @var bool|null
    */
    public ?bool $can_set_sticker_set = null;

    /**
    * <p>*Optional*. For supergroups, the name of the group's custom emoji sticker set. Custom emoji from this set can be used by all users and bots in the group.</p>
    * @var string|null
    */
    public ?string $custom_emoji_sticker_set_name = null;

    /**
    * <p>*Optional*. Unique identifier for the linked chat, i.e. the discussion group identifier for a channel and vice versa; for supergroups and channel chats. This identifier may be greater than 32 bits and some programming languages may have difficulty/silent defects in interpreting it. But it is smaller than 52 bits, so a signed 64 bit integer or double-precision float type are safe for storing this identifier.</p>
    * @var int|null
    */
    public ?int $linked_chat_id = null;

    /**
    * <p>*Optional*. For supergroups, the location to which the supergroup is connected</p>
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

        $this->accent_color_id = $data['accent_color_id'];
        $this->max_reaction_count = $data['max_reaction_count'];
        if (isset($data['photo'])){
            $this->photo = new ChatPhoto($data['photo']);
        }

        if (isset($data['active_usernames'])){
            $this->active_usernames = $data['active_usernames'];
        }

        if (isset($data['birthdate'])){
            $this->birthdate = new Birthdate($data['birthdate']);
        }

        if (isset($data['business_intro'])){
            $this->business_intro = new BusinessIntro($data['business_intro']);
        }

        if (isset($data['business_location'])){
            $this->business_location = new BusinessLocation($data['business_location']);
        }

        if (isset($data['business_opening_hours'])){
            $this->business_opening_hours = new BusinessOpeningHours($data['business_opening_hours']);
        }

        if (isset($data['personal_chat'])){
            $this->personal_chat = new Chat($data['personal_chat']);
        }

        if (isset($data['available_reactions'])){
            $this->available_reactions = $data['available_reactions'];
        }

        if (isset($data['background_custom_emoji_id'])){
            $this->background_custom_emoji_id = $data['background_custom_emoji_id'];
        }

        if (isset($data['profile_accent_color_id'])){
            $this->profile_accent_color_id = $data['profile_accent_color_id'];
        }

        if (isset($data['profile_background_custom_emoji_id'])){
            $this->profile_background_custom_emoji_id = $data['profile_background_custom_emoji_id'];
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

        if (isset($data['unrestrict_boost_count'])){
            $this->unrestrict_boost_count = $data['unrestrict_boost_count'];
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

        if (isset($data['has_visible_history'])){
            $this->has_visible_history = $data['has_visible_history'];
        }

        if (isset($data['sticker_set_name'])){
            $this->sticker_set_name = $data['sticker_set_name'];
        }

        if (isset($data['can_set_sticker_set'])){
            $this->can_set_sticker_set = $data['can_set_sticker_set'];
        }

        if (isset($data['custom_emoji_sticker_set_name'])){
            $this->custom_emoji_sticker_set_name = $data['custom_emoji_sticker_set_name'];
        }

        if (isset($data['linked_chat_id'])){
            $this->linked_chat_id = $data['linked_chat_id'];
        }

        if (isset($data['location'])){
            $this->location = new ChatLocation($data['location']);
        }

    }
}