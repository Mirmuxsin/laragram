<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getChatMenuButton
 *
 *Use this method to get the current value of the bot's menu button in a private chat, or the default menu button. Returns [MenuButton](https://core.telegram.org/bots/api/#menubutton) on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getchatmenubutton
 * @abstract
 */
abstract class getChatMenuButton extends Laragram
{
    /**
     * @var integer chat_id  Unique identifier for the target private chat. If not specified, default bot's menu button will be returned
     * 
     * @access getChatMenuButton
     */
     public static function getChatMenuButton () {
        return true;
     }
}