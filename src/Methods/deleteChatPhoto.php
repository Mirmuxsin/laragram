<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* deleteChatPhoto
 *
 *Use this method to delete a chat photo. Photos can't be changed for private chats. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#deletechatphoto
 * @abstract
 */
abstract class deleteChatPhoto extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * 
     * @access deleteChatPhoto
     */
     public static function deleteChatPhoto () {
        return true;
     }
}