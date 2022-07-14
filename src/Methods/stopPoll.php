<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* stopPoll
 *
 *Use this method to stop a poll which was sent by the bot. On success, the stopped [Poll](https://core.telegram.org/bots/api/#poll) is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#stoppoll
 * @abstract
 */
abstract class stopPoll extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id *(required: true)* Identifier of the original message with the poll
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for a new message [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating).
     * 
     * @access stopPoll
     */
     public static function stopPoll () {
        return true;
     }
}