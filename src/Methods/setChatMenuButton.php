<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setChatMenuButton
 *
 *Use this method to change the bot's menu button in a private chat, or the default menu button. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setchatmenubutton
 * @abstract
 */
abstract class setChatMenuButton extends Laragram
{
    /**
     * @var integer chat_id  Unique identifier for the target private chat. If not specified, default bot's menu button will be changed
     * @var \Milly\Laragram\Types\MenuButton menu_button  A JSON-serialized object for the bot's new menu button. Defaults to [MenuButtonDefault](https://core.telegram.org/bots/api/#menubuttondefault)
     * 
     * @access setChatMenuButton
     */
     public static function setChatMenuButton () {
        return true;
     }
}