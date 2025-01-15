<?php

namespace Milly\Laragram\Types;

/**
* ChatMember
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmember
 */
class ChatMember
{


    public ChatMemberOwner $chatMemberOwner;

    public ChatMemberAdministrator $chatMemberAdministrator;

    public ChatMemberMember $chatMemberMember;

    public ChatMemberRestricted $chatMemberRestricted;

    public ChatMemberLeft $chatMemberLeft;

    public ChatMemberBanned $chatMemberBanned;



    public function __construct($data)
    {
        $this->chatMemberOwner = new ChatMemberOwner($data);
        $this->chatMemberAdministrator = new ChatMemberAdministrator($data);
        $this->chatMemberMember = new ChatMemberMember($data);
        $this->chatMemberRestricted = new ChatMemberRestricted($data);
        $this->chatMemberLeft = new ChatMemberLeft($data);
        $this->chatMemberBanned = new ChatMemberBanned($data);
    }
}