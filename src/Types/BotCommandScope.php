<?php

namespace Milly\Laragram\Types;

/**
* BotCommandScope
 *
 *<p>This object represents the scope to which bot commands are applied. Currently, the following 7 scopes are supported:</p><p>* <a href="https://core.telegram.org/bots/api/#botcommandscopedefault">BotCommandScopeDefault</a>
* <a href="https://core.telegram.org/bots/api/#botcommandscopeallprivatechats">BotCommandScopeAllPrivateChats</a>
* <a href="https://core.telegram.org/bots/api/#botcommandscopeallgroupchats">BotCommandScopeAllGroupChats</a>
* <a href="https://core.telegram.org/bots/api/#botcommandscopeallchatadministrators">BotCommandScopeAllChatAdministrators</a>
* <a href="https://core.telegram.org/bots/api/#botcommandscopechat">BotCommandScopeChat</a>
* <a href="https://core.telegram.org/bots/api/#botcommandscopechatadministrators">BotCommandScopeChatAdministrators</a>
* <a href="https://core.telegram.org/bots/api/#botcommandscopechatmember">BotCommandScopeChatMember</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommandscope
 */
class BotCommandScope
{
    public ?BotCommandScopeDefault $botCommandScopeDefault = null;
    public ?BotCommandScopeAllPrivateChats $botCommandScopeAllPrivateChats = null;
    public ?BotCommandScopeAllGroupChats $botCommandScopeAllGroupChats = null;
    public ?BotCommandScopeAllChatAdministrators $botCommandScopeAllChatAdministrators = null;
    public ?BotCommandScopeChat $botCommandScopeChat = null;
    public ?BotCommandScopeChatAdministrators $botCommandScopeChatAdministrators = null;
    public ?BotCommandScopeChatMember $botCommandScopeChatMember = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create BotCommandScopeDefault
        try {
            $botCommandScopeDefault = new BotCommandScopeDefault($data);
            $successfulType = 'BotCommandScopeDefault';
            $successfulObject = $botCommandScopeDefault;
            goto success;
        } catch (\Exception $e) {
            $errors['BotCommandScopeDefault'] = $e->getMessage();
        }

        // Try to create BotCommandScopeAllPrivateChats
        try {
            $botCommandScopeAllPrivateChats = new BotCommandScopeAllPrivateChats($data);
            $successfulType = 'BotCommandScopeAllPrivateChats';
            $successfulObject = $botCommandScopeAllPrivateChats;
            goto success;
        } catch (\Exception $e) {
            $errors['BotCommandScopeAllPrivateChats'] = $e->getMessage();
        }

        // Try to create BotCommandScopeAllGroupChats
        try {
            $botCommandScopeAllGroupChats = new BotCommandScopeAllGroupChats($data);
            $successfulType = 'BotCommandScopeAllGroupChats';
            $successfulObject = $botCommandScopeAllGroupChats;
            goto success;
        } catch (\Exception $e) {
            $errors['BotCommandScopeAllGroupChats'] = $e->getMessage();
        }

        // Try to create BotCommandScopeAllChatAdministrators
        try {
            $botCommandScopeAllChatAdministrators = new BotCommandScopeAllChatAdministrators($data);
            $successfulType = 'BotCommandScopeAllChatAdministrators';
            $successfulObject = $botCommandScopeAllChatAdministrators;
            goto success;
        } catch (\Exception $e) {
            $errors['BotCommandScopeAllChatAdministrators'] = $e->getMessage();
        }

        // Try to create BotCommandScopeChat
        try {
            $botCommandScopeChat = new BotCommandScopeChat($data);
            $successfulType = 'BotCommandScopeChat';
            $successfulObject = $botCommandScopeChat;
            goto success;
        } catch (\Exception $e) {
            $errors['BotCommandScopeChat'] = $e->getMessage();
        }

        // Try to create BotCommandScopeChatAdministrators
        try {
            $botCommandScopeChatAdministrators = new BotCommandScopeChatAdministrators($data);
            $successfulType = 'BotCommandScopeChatAdministrators';
            $successfulObject = $botCommandScopeChatAdministrators;
            goto success;
        } catch (\Exception $e) {
            $errors['BotCommandScopeChatAdministrators'] = $e->getMessage();
        }

        // Try to create BotCommandScopeChatMember
        try {
            $botCommandScopeChatMember = new BotCommandScopeChatMember($data);
            $successfulType = 'BotCommandScopeChatMember';
            $successfulObject = $botCommandScopeChatMember;
            goto success;
        } catch (\Exception $e) {
            $errors['BotCommandScopeChatMember'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for BotCommandScope. Errors: ' . json_encode($errors));
        }
        
        success:
        // Set the successful object
        switch ($successfulType) {
            case 'BotCommandScopeDefault':
                $this->botCommandScopeDefault = $successfulObject;
                break;
            case 'BotCommandScopeAllPrivateChats':
                $this->botCommandScopeAllPrivateChats = $successfulObject;
                break;
            case 'BotCommandScopeAllGroupChats':
                $this->botCommandScopeAllGroupChats = $successfulObject;
                break;
            case 'BotCommandScopeAllChatAdministrators':
                $this->botCommandScopeAllChatAdministrators = $successfulObject;
                break;
            case 'BotCommandScopeChat':
                $this->botCommandScopeChat = $successfulObject;
                break;
            case 'BotCommandScopeChatAdministrators':
                $this->botCommandScopeChatAdministrators = $successfulObject;
                break;
            case 'BotCommandScopeChatMember':
                $this->botCommandScopeChatMember = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}