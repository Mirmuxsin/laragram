<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getChat
 *
 *Use this method to get up to date information about the chat (current name of the user for one-on-one conversations, current username of a user, group or channel, etc.). Returns a [Chat](https://core.telegram.org/bots/api/#chat) object on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getchat
 * @abstract
 */
abstract class getChat extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup or channel (in the format `@channelusername`)
     * 
     * @access getChat
     */
     public static function getChat () {
        return true;
     }
}