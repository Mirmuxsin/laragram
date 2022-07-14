<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setGameScore
 *
 *Use this method to set the score of the specified user in a game message. On success, if the message is not an inline message, the [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned. Returns an error, if the new score is not greater than the user's current score in the chat and *force* is *False*.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setgamescore
 * @abstract
 */
abstract class setGameScore extends Laragram
{
    /**
     * @var integer user_id *(required: true)* User identifier
     * @var integer score *(required: true)* New score, must be non-negative
     * @var bool force  Pass *True*, if the high score is allowed to decrease. This can be useful when fixing mistakes or banning cheaters
     * @var bool disable_edit_message  Pass *True*, if the game message should not be automatically edited to include the current scoreboard
     * @var integer chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the sent message
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * 
     * @access setGameScore
     */
     public static function setGameScore () {
        return true;
     }
}