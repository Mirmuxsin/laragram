<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getMyCommands
 *
 *Use this method to get the current list of the bot's commands for the given scope and user language. Returns Array of [BotCommand](https://core.telegram.org/bots/api/#botcommand) on success. If commands aren't set, an empty list is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getmycommands
 * @abstract
 */
abstract class getMyCommands extends Laragram
{
    /**
     * @var \Milly\Laragram\Types\BotCommandScope scope  A JSON-serialized object, describing scope of users. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
     * @var string language_code  A two-letter ISO 639-1 language code or an empty string
     * 
     * @access getMyCommands
     */
     public static function getMyCommands () {
        return true;
     }
}