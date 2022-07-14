<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setChatAdministratorCustomTitle
 *
 *Use this method to set a custom title for an administrator in a supergroup promoted by the bot. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setchatadministratorcustomtitle
 * @abstract
 */
abstract class setChatAdministratorCustomTitle extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var string custom_title *(required: true)**(min length: 0)**(max length: 0)* New custom title for the administrator; 0-16 characters, emoji are not allowed
     * 
     * @access setChatAdministratorCustomTitle
     */
     public static function setChatAdministratorCustomTitle () {
        return true;
     }
}