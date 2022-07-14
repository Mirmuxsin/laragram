<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* stopMessageLiveLocation
 *
 *Use this method to stop updating a live location message before *live\_period* expires. On success, if the message is not an inline message, the edited [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#stopmessagelivelocation
 * @abstract
 */
abstract class stopMessageLiveLocation extends Laragram
{
    /**
     * @var integer|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message with live location to stop
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating).
     * 
     * @access stopMessageLiveLocation
     */
     public static function stopMessageLiveLocation () {
        return true;
     }
}