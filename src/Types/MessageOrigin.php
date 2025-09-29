<?php

namespace Milly\Laragram\Types;

/**
* MessageOrigin
 *
 * Union type that can be one of: MessageOriginUser, MessageOriginHiddenUser, MessageOriginChat, MessageOriginChannel
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageorigin
 */
class MessageOrigin
{


    public ?MessageOriginUser $messageOriginUser = null;
    public ?MessageOriginHiddenUser $messageOriginHiddenUser = null;
    public ?MessageOriginChat $messageOriginChat = null;
    public ?MessageOriginChannel $messageOriginChannel = null;
    public string $type;



    public function __construct($data)
    {
        // Try to instantiate each possible type and see which one works
        $errors = [];
        $successfulType = null;
        $successfulObject = null;
        
                // Try to create MessageOriginUser
        try {
            $messageOriginUser = new MessageOriginUser($data);
            $successfulType = 'MessageOriginUser';
            $successfulObject = $messageOriginUser;
            break;
        } catch (Exception $e) {
            $errors['MessageOriginUser'] = $e->getMessage();
        }

        // Try to create MessageOriginHiddenUser
        try {
            $messageOriginHiddenUser = new MessageOriginHiddenUser($data);
            $successfulType = 'MessageOriginHiddenUser';
            $successfulObject = $messageOriginHiddenUser;
            break;
        } catch (Exception $e) {
            $errors['MessageOriginHiddenUser'] = $e->getMessage();
        }

        // Try to create MessageOriginChat
        try {
            $messageOriginChat = new MessageOriginChat($data);
            $successfulType = 'MessageOriginChat';
            $successfulObject = $messageOriginChat;
            break;
        } catch (Exception $e) {
            $errors['MessageOriginChat'] = $e->getMessage();
        }

        // Try to create MessageOriginChannel
        try {
            $messageOriginChannel = new MessageOriginChannel($data);
            $successfulType = 'MessageOriginChannel';
            $successfulObject = $messageOriginChannel;
            break;
        } catch (Exception $e) {
            $errors['MessageOriginChannel'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new Exception('Could not create any of the union types for MessageOrigin. Errors: ' . json_encode($errors));
        }
        
        // Set the successful object
        switch ($successfulType) {
            case 'MessageOriginUser':
                $this->messageOriginUser = $successfulObject;
                break;
            case 'MessageOriginHiddenUser':
                $this->messageOriginHiddenUser = $successfulObject;
                break;
            case 'MessageOriginChat':
                $this->messageOriginChat = $successfulObject;
                break;
            case 'MessageOriginChannel':
                $this->messageOriginChannel = $successfulObject;
                break;
        }
        
        $this->type = $successfulType;
    }
}