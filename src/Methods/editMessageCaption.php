<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* editMessageCaption
 *
 *Use this method to edit captions of messages. On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#editmessagecaption
 * @abstract
 */
abstract class editMessageCaption extends Laragram
{
    /**
     * @var integer|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var string caption *(min length: 0)**(max length: 0)* New caption of the message, 0-1024 characters after entities parsing
     * @var string parse_mode  Mode for parsing entities in the message caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array caption_entities  A JSON-serialized list of special entities that appear in the caption, which can be specified instead of *parse\_mode*
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating).
     * 
     * @access editMessageCaption
     */
     public static function editMessageCaption () {
        return true;
     }
}