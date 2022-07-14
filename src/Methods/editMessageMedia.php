<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* editMessageMedia
 *
 *Use this method to edit animation, audio, document, photo, or video messages. If a message is part of a message album, then it can be edited only to an audio for audio albums, only to a document for document albums and to a photo or a video otherwise. When an inline message is edited, a new file can't be uploaded; use a previously uploaded file via its file\_id or specify a URL. On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#editmessagemedia
 * @abstract
 */
abstract class editMessageMedia extends Laragram
{
    /**
     * @var integer|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var \Milly\Laragram\Types\InputMedia media *(required: true)* A JSON-serialized object for a new media content of the message
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating).
     * 
     * @access editMessageMedia
     */
     public static function editMessageMedia () {
        return true;
     }
}