<?php

namespace Milly\Laragram\Types;

/**
* ChatMemberUpdated
 *
 *<p>*Optional*. True, if the user joined the chat via a chat folder invite link</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberupdated
 */
class ChatMemberUpdated
{
    /**
    * <p>Chat the user belongs to</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>Performer of the action, which resulted in the change</p>
    * @var User
    */
    public User $from;

    /**
    * <p>Date the change was done in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>Previous information about the chat member</p>
    * @var ChatMember
    */
    public ChatMember $old_chat_member;

    /**
    * <p>New information about the chat member</p>
    * @var ChatMember
    */
    public ChatMember $new_chat_member;

    /**
    * <p>*Optional*. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.</p>
    * @var ChatInviteLink|null
    */
    public ?ChatInviteLink $invite_link = null;

    /**
    * <p>*Optional*. True, if the user joined the chat after sending a direct join request without using an invite link and being approved by an administrator</p>
    * @var bool|null
    */
    public ?bool $via_join_request = null;

    /**
    * <p>*Optional*. True, if the user joined the chat via a chat folder invite link</p>
    * @var bool|null
    */
    public ?bool $via_chat_folder_invite_link = null;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['chat_member_updated'];
        $this->chat = new Chat($data['chat']);

        $this->from = new User($data['from']);

        $this->date = $data['date'];
        $this->old_chat_member = new ChatMember($data['old_chat_member']);

        $this->new_chat_member = new ChatMember($data['new_chat_member']);

        if (isset($data['invite_link'])){
            $this->invite_link = new ChatInviteLink($data['invite_link']);
        }

        if (isset($data['via_join_request'])){
            $this->via_join_request = $data['via_join_request'];
        }

        if (isset($data['via_chat_folder_invite_link'])){
            $this->via_chat_folder_invite_link = $data['via_chat_folder_invite_link'];
        }

    }
}