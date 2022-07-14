<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ReplyKeyboardRemove
 *
 *Upon receiving a message with this object, Telegram clients will remove the current custom keyboard and display the default letter-keyboard. By default, custom keyboards are displayed until a new keyboard is sent by a bot. An exception is made for one-time keyboards that are hidden immediately after the user presses a button (see [ReplyKeyboardMarkup](https://core.telegram.org/bots/api/#replykeyboardmarkup)).
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#replykeyboardremove
 */
class ReplyKeyboardRemove extends Laragram
{
    /**
    * Requests clients to remove the custom keyboard (user will not be able to summon this keyboard; if you want to hide the keyboard from sight but keep it accessible, use *one\_time\_keyboard* in [ReplyKeyboardMarkup](https://core.telegram.org/bots/api/#replykeyboardmarkup))
    * @var bool
    */
    public bool $remove_keyboard;

    /**
    * *Optional*. Use this parameter if you want to remove the keyboard for specific users only. Targets: 1) users that are @mentioned in the *text* of the [Message](https://core.telegram.org/bots/api/#message) object; 2) if the bot's message is a reply (has *reply\_to\_message\_id*), sender of the original message.  

*Example:* A user votes in a poll, bot returns confirmation message in reply to the vote and removes the keyboard for that user, while still showing the keyboard with poll options to users who haven't voted yet.
    * @var bool|null
    */
    public ?bool $selective = null;



    public function __construct($data)
    {
        $this->remove_keyboard = $data['remove_keyboard'];
        if (isset($data['selective'])){
            $this->selective = $data['selective'];
        }

    }
}