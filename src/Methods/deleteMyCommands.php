<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* deleteMyCommands
 *
 *Use this method to delete the list of the bot's commands for the given scope and user language. After deletion, [higher level commands](https://core.telegram.org/bots/api/#determining-list-of-commands) will be shown to affected users. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#deletemycommands
 * @abstract
 */
abstract class deleteMyCommands extends Laragram
{
    /**
     * @var \Milly\Laragram\Types\BotCommandScope scope  A JSON-serialized object, describing scope of users for which the commands are relevant. Defaults to [BotCommandScopeDefault](https://core.telegram.org/bots/api/#botcommandscopedefault).
     * @var string language_code  A two-letter ISO 639-1 language code. If empty, commands will be applied to all users from the given scope, for whose language there are no dedicated commands
     * 
     * @access deleteMyCommands
     */
     public static function deleteMyCommands () {
        return true;
     }
}