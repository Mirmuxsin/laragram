<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InlineQueryResultCachedSticker
 *
 *Represents a link to a sticker stored on the Telegram servers. By default, this sticker will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the sticker.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultcachedsticker
 */
class InlineQueryResultCachedSticker extends Laragram
{
    /**
    * Type of the result, must be *sticker*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for this result, 1-64 bytes
    * @var string
    */
    public string $id;

    /**
    * A valid file identifier of the sticker
    * @var string
    */
    public string $sticker_file_id;

    /**
    * *Optional*. [Inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * *Optional*. Content of the message to be sent instead of the sticker
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->sticker_file_id = $data['sticker_file_id'];
        if (isset($data['reply_markup'])){
            $this->reply_markup = new InlineKeyboardMarkup($data['reply_markup']);
        }

        if (isset($data['input_message_content'])){
            $this->input_message_content = new InputMessageContent($data['input_message_content']);
        }

    }
}