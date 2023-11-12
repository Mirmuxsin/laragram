<?php

namespace Milly\Laragram\Types;


/**
* ReplyKeyboardRemove
 *
 *<p>*Optional*. Use this parameter if you want to remove the keyboard for specific users only. Targets: 1) users that are @mentioned in the *text* of the <a href="https://core.telegram.org/bots/api/#message">Message</a> object; 2) if the bot's message is a reply (has *reply\<em>to\</em>message\_id*), sender of the original message.  </p><p>*Example:* A user votes in a poll, bot returns confirmation message in reply to the vote and removes the keyboard for that user, while still showing the keyboard with poll options to users who haven't voted yet.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#replykeyboardremove
 */
class ReplyKeyboardRemove
{
    /**
    * <p>Requests clients to remove the custom keyboard (user will not be able to summon this keyboard; if you want to hide the keyboard from sight but keep it accessible, use *one\<em>time\</em>keyboard* in <a href="https://core.telegram.org/bots/api/#replykeyboardmarkup">ReplyKeyboardMarkup</a>)</p>
    * @var bool
    */
    public bool $remove_keyboard;

    /**
    * <p>*Optional*. Use this parameter if you want to remove the keyboard for specific users only. Targets: 1) users that are @mentioned in the *text* of the <a href="https://core.telegram.org/bots/api/#message">Message</a> object; 2) if the bot's message is a reply (has *reply\<em>to\</em>message\_id*), sender of the original message.  </p><p>*Example:* A user votes in a poll, bot returns confirmation message in reply to the vote and removes the keyboard for that user, while still showing the keyboard with poll options to users who haven't voted yet.</p>
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