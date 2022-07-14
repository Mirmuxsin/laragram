<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setChatTitle
 *
 *Use this method to change the title of a chat. Titles can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setchattitle
 * @abstract
 */
abstract class setChatTitle extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string title *(required: true)**(min length: 1)**(max length: 1)* New chat title, 1-255 characters
     * 
     * @access setChatTitle
     */
     public static function setChatTitle () {
        return true;
     }
}