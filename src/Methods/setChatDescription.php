<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setChatDescription
 *
 *Use this method to change the description of a group, a supergroup or a channel. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setchatdescription
 * @abstract
 */
abstract class setChatDescription extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string description *(min length: 0)**(max length: 0)* New chat description, 0-255 characters
     * 
     * @access setChatDescription
     */
     public static function setChatDescription () {
        return true;
     }
}