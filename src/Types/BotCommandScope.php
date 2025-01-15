<?php

namespace Milly\Laragram\Types;

/**
* BotCommandScope
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscope
 */
class BotCommandScope
{


    public BotCommandScopeDefault $botCommandScopeDefault;

    public BotCommandScopeAllPrivateChats $botCommandScopeAllPrivateChats;

    public BotCommandScopeAllGroupChats $botCommandScopeAllGroupChats;

    public BotCommandScopeAllChatAdministrators $botCommandScopeAllChatAdministrators;

    public BotCommandScopeChat $botCommandScopeChat;

    public BotCommandScopeChatAdministrators $botCommandScopeChatAdministrators;

    public BotCommandScopeChatMember $botCommandScopeChatMember;



    public function __construct($data)
    {
        $this->botCommandScopeDefault = new BotCommandScopeDefault($data);
        $this->botCommandScopeAllPrivateChats = new BotCommandScopeAllPrivateChats($data);
        $this->botCommandScopeAllGroupChats = new BotCommandScopeAllGroupChats($data);
        $this->botCommandScopeAllChatAdministrators = new BotCommandScopeAllChatAdministrators($data);
        $this->botCommandScopeChat = new BotCommandScopeChat($data);
        $this->botCommandScopeChatAdministrators = new BotCommandScopeChatAdministrators($data);
        $this->botCommandScopeChatMember = new BotCommandScopeChatMember($data);
    }
}