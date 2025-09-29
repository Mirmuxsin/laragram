<?php

namespace Milly\Laragram\Types;

/**
* ChatMember
 *
 *<p>This object contains information about one member of a chat. Currently, the following 6 types of chat members are supported:</p><p>* <a href="https://core.telegram.org/bots/api/#chatmemberowner">ChatMemberOwner</a>
* <a href="https://core.telegram.org/bots/api/#chatmemberadministrator">ChatMemberAdministrator</a>
* <a href="https://core.telegram.org/bots/api/#chatmembermember">ChatMemberMember</a>
* <a href="https://core.telegram.org/bots/api/#chatmemberrestricted">ChatMemberRestricted</a>
* <a href="https://core.telegram.org/bots/api/#chatmemberleft">ChatMemberLeft</a>
* <a href="https://core.telegram.org/bots/api/#chatmemberbanned">ChatMemberBanned</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatmember
 */
class ChatMember
{
    public ?ChatMemberOwner $chatMemberOwner = null;
    public ?ChatMemberAdministrator $chatMemberAdministrator = null;
    public ?ChatMemberMember $chatMemberMember = null;
    public ?ChatMemberRestricted $chatMemberRestricted = null;
    public ?ChatMemberLeft $chatMemberLeft = null;
    public ?ChatMemberBanned $chatMemberBanned = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create ChatMemberOwner
        try {
            $chatMemberOwner = new ChatMemberOwner($data);
            $successfulType = 'ChatMemberOwner';
            $successfulObject = $chatMemberOwner;
            goto success;
        } catch (\Exception $e) {
            $errors['ChatMemberOwner'] = $e->getMessage();
        }

        // Try to create ChatMemberAdministrator
        try {
            $chatMemberAdministrator = new ChatMemberAdministrator($data);
            $successfulType = 'ChatMemberAdministrator';
            $successfulObject = $chatMemberAdministrator;
            goto success;
        } catch (\Exception $e) {
            $errors['ChatMemberAdministrator'] = $e->getMessage();
        }

        // Try to create ChatMemberMember
        try {
            $chatMemberMember = new ChatMemberMember($data);
            $successfulType = 'ChatMemberMember';
            $successfulObject = $chatMemberMember;
            goto success;
        } catch (\Exception $e) {
            $errors['ChatMemberMember'] = $e->getMessage();
        }

        // Try to create ChatMemberRestricted
        try {
            $chatMemberRestricted = new ChatMemberRestricted($data);
            $successfulType = 'ChatMemberRestricted';
            $successfulObject = $chatMemberRestricted;
            goto success;
        } catch (\Exception $e) {
            $errors['ChatMemberRestricted'] = $e->getMessage();
        }

        // Try to create ChatMemberLeft
        try {
            $chatMemberLeft = new ChatMemberLeft($data);
            $successfulType = 'ChatMemberLeft';
            $successfulObject = $chatMemberLeft;
            goto success;
        } catch (\Exception $e) {
            $errors['ChatMemberLeft'] = $e->getMessage();
        }

        // Try to create ChatMemberBanned
        try {
            $chatMemberBanned = new ChatMemberBanned($data);
            $successfulType = 'ChatMemberBanned';
            $successfulObject = $chatMemberBanned;
            goto success;
        } catch (\Exception $e) {
            $errors['ChatMemberBanned'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for ChatMember. Errors: ' . json_encode($errors));
        }
        
        success:
        // Set the successful object
        switch ($successfulType) {
            case 'ChatMemberOwner':
                $this->chatMemberOwner = $successfulObject;
                break;
            case 'ChatMemberAdministrator':
                $this->chatMemberAdministrator = $successfulObject;
                break;
            case 'ChatMemberMember':
                $this->chatMemberMember = $successfulObject;
                break;
            case 'ChatMemberRestricted':
                $this->chatMemberRestricted = $successfulObject;
                break;
            case 'ChatMemberLeft':
                $this->chatMemberLeft = $successfulObject;
                break;
            case 'ChatMemberBanned':
                $this->chatMemberBanned = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}