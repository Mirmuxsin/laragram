<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InlineQueryResultDocument
 *
 *Represents a link to a file. By default, this file will be sent by the user with an optional caption. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the file. Currently, only **.PDF** and **.ZIP** files can be sent using this method.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultdocument
 */
class InlineQueryResultDocument extends Laragram
{
    /**
    * Type of the result, must be *document*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for this result, 1-64 bytes
    * @var string
    */
    public string $id;

    /**
    * Title for the result
    * @var string
    */
    public string $title;

    /**
    * *Optional*. Caption of the document to be sent, 0-1024 characters after entities parsing
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * *Optional*. Mode for parsing entities in the document caption. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * *Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * A valid URL for the file
    * @var string
    */
    public string $document_url;

    /**
    * MIME type of the content of the file, either “application/pdf” or “application/zip”
    * @var string
    */
    public string $mime_type;

    /**
    * *Optional*. Short description of the result
    * @var string|null
    */
    public ?string $description = null;

    /**
    * *Optional*. Inline keyboard attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * *Optional*. Content of the message to be sent instead of the file
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;

    /**
    * *Optional*. URL of the thumbnail (JPEG only) for the file
    * @var string|null
    */
    public ?string $thumb_url = null;

    /**
    * *Optional*. Thumbnail width
    * @var int|null
    */
    public ?int $thumb_width = null;

    /**
    * *Optional*. Thumbnail height
    * @var int|null
    */
    public ?int $thumb_height = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->title = $data['title'];
        if (isset($data['caption'])){
            $this->caption = $data['caption'];
        }

        if (isset($data['parse_mode'])){
            $this->parse_mode = $data['parse_mode'];
        }

        if (isset($data['caption_entities'])){
            $this->caption_entities = $data['caption_entities'];
        }

        $this->document_url = $data['document_url'];
        $this->mime_type = $data['mime_type'];
        if (isset($data['description'])){
            $this->description = $data['description'];
        }

        if (isset($data['reply_markup'])){
            $this->reply_markup = new InlineKeyboardMarkup($data['reply_markup']);
        }

        if (isset($data['input_message_content'])){
            $this->input_message_content = new InputMessageContent($data['input_message_content']);
        }

        if (isset($data['thumb_url'])){
            $this->thumb_url = $data['thumb_url'];
        }

        if (isset($data['thumb_width'])){
            $this->thumb_width = $data['thumb_width'];
        }

        if (isset($data['thumb_height'])){
            $this->thumb_height = $data['thumb_height'];
        }

    }
}