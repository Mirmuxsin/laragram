<?php

namespace Milly\Laragram\Types;

/**
* ChatMember
 *
 * Union type that can be one of: ChatMemberOwner, ChatMemberAdministrator, ChatMemberMember, ChatMemberRestricted, ChatMemberLeft, ChatMemberBanned
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
            break;
        } catch (Exception $e) {
            $errors['ChatMemberOwner'] = $e->getMessage();
        }

        // Try to create ChatMemberAdministrator
        try {
            $chatMemberAdministrator = new ChatMemberAdministrator($data);
            $successfulType = 'ChatMemberAdministrator';
            $successfulObject = $chatMemberAdministrator;
            break;
        } catch (Exception $e) {
            $errors['ChatMemberAdministrator'] = $e->getMessage();
        }

        // Try to create ChatMemberMember
        try {
            $chatMemberMember = new ChatMemberMember($data);
            $successfulType = 'ChatMemberMember';
            $successfulObject = $chatMemberMember;
            break;
        } catch (Exception $e) {
            $errors['ChatMemberMember'] = $e->getMessage();
        }

        // Try to create ChatMemberRestricted
        try {
            $chatMemberRestricted = new ChatMemberRestricted($data);
            $successfulType = 'ChatMemberRestricted';
            $successfulObject = $chatMemberRestricted;
            break;
        } catch (Exception $e) {
            $errors['ChatMemberRestricted'] = $e->getMessage();
        }

        // Try to create ChatMemberLeft
        try {
            $chatMemberLeft = new ChatMemberLeft($data);
            $successfulType = 'ChatMemberLeft';
            $successfulObject = $chatMemberLeft;
            break;
        } catch (Exception $e) {
            $errors['ChatMemberLeft'] = $e->getMessage();
        }

        // Try to create ChatMemberBanned
        try {
            $chatMemberBanned = new ChatMemberBanned($data);
            $successfulType = 'ChatMemberBanned';
            $successfulObject = $chatMemberBanned;
            break;
        } catch (Exception $e) {
            $errors['ChatMemberBanned'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new Exception('Could not create any of the union types for ChatMember. Errors: ' . json_encode($errors));
        }
        
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