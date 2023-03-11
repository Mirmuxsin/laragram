<?php

namespace Milly\Laragram\Types;


/**
* ChatMemberUpdated
 *
 *This object represents changes in the status of a chat member.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmemberupdated
 */
class ChatMemberUpdated
{
    /**
    * Chat the user belongs to
    * @var Chat
    */
    public Chat $chat;

    /**
    * Performer of the action, which resulted in the change
    * @var User
    */
    public User $from;

    /**
    * Date the change was done in Unix time
    * @var int
    */
    public int $date;

    /**
    * Previous information about the chat member
    * @var ChatMember
    */
    public ChatMember $old_chat_member;

    /**
    * New information about the chat member
    * @var ChatMember
    */
    public ChatMember $new_chat_member;

    /**
    * *Optional*. Chat invite link, which was used by the user to join the chat; for joining by invite link events only.
    * @var ChatInviteLink|null
    */
    public ?ChatInviteLink $invite_link = null;



    public function __construct($data)
    {
        $this->chat = new Chat($data['chat']);

        $this->from = new User($data['from']);

        $this->date = $data['date'];
        $this->old_chat_member = new ChatMember($data['old_chat_member']);

        $this->new_chat_member = new ChatMember($data['new_chat_member']);

        if (isset($data['invite_link'])){
            $this->invite_link = new ChatInviteLink($data['invite_link']);
        }

    }
}