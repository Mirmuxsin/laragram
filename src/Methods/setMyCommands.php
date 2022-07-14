<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setMyCommands
 *
 *Use this method to change the list of the bot's commands. See [https://core.telegram.org/bots#commands](https://core.telegram.org/bots#commands) for more details about bot commands. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setmycommands
 * @abstract
 */
abstract class setMyCommands extends Laragram
{
    /**
     * @var array commands *(required: true)* A JSON-serialized list of bot commands to be set as the list of the bot's commands. At most 100 commands can be specified.
     * @var \Milly\Laragram\Types\BotCommandScope scope  A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
     * @var string language_code  A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     * 
     * @access setMyCommands
     */
     public static function setMyCommands () {
        return true;
     }
}