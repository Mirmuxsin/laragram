<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setChatPhoto
 *
 *Use this method to set a new profile photo for the chat. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setchatphoto
 * @abstract
 */
abstract class setChatPhoto extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var \Milly\Laragram\Types\InputFile photo *(required: true)* New chat photo, uploaded using multipart/form-data
     * 
     * @access setChatPhoto
     */
     public static function setChatPhoto () {
        return true;
     }
}