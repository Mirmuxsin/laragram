<?php

namespace Milly\Laragram\Types;

/**
* MessageOrigin
 *
 *<p>This object describes the origin of a message. It can be one of</p><p>* <a href="https://core.telegram.org/bots/api/#messageoriginuser">MessageOriginUser</a>
* <a href="https://core.telegram.org/bots/api/#messageoriginhiddenuser">MessageOriginHiddenUser</a>
* <a href="https://core.telegram.org/bots/api/#messageoriginchat">MessageOriginChat</a>
* <a href="https://core.telegram.org/bots/api/#messageoriginchannel">MessageOriginChannel</a></p>
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
            goto success;
        } catch (\Exception $e) {
            $errors['MessageOriginUser'] = $e->getMessage();
        }

        // Try to create MessageOriginHiddenUser
        try {
            $messageOriginHiddenUser = new MessageOriginHiddenUser($data);
            $successfulType = 'MessageOriginHiddenUser';
            $successfulObject = $messageOriginHiddenUser;
            goto success;
        } catch (\Exception $e) {
            $errors['MessageOriginHiddenUser'] = $e->getMessage();
        }

        // Try to create MessageOriginChat
        try {
            $messageOriginChat = new MessageOriginChat($data);
            $successfulType = 'MessageOriginChat';
            $successfulObject = $messageOriginChat;
            goto success;
        } catch (\Exception $e) {
            $errors['MessageOriginChat'] = $e->getMessage();
        }

        // Try to create MessageOriginChannel
        try {
            $messageOriginChannel = new MessageOriginChannel($data);
            $successfulType = 'MessageOriginChannel';
            $successfulObject = $messageOriginChannel;
            goto success;
        } catch (\Exception $e) {
            $errors['MessageOriginChannel'] = $e->getMessage();
        }

        
        if ($successfulObject === null) {
            throw new \Exception('Could not create any of the union types for MessageOrigin. Errors: ' . json_encode($errors));
        }
        
        success:
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