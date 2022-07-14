<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* editMessageText
 *
 *Use this method to edit text and [game](https://core.telegram.org/bots/api/#games) messages. On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#editmessagetext
 * @abstract
 */
abstract class editMessageText extends Laragram
{
    /**
     * @var integer|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var string text *(required: true)**(min length: 1)**(max length: 1)* New text of the message, 1-4096 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array entities  A JSON-serialized list of special entities that appear in message text, which can be specified instead of *parse\_mode*
     * @var bool disable_web_page_preview  Disables link previews for links in this message
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating).
     * 
     * @access editMessageText
     */
     public static function editMessageText () {
        return true;
     }
}