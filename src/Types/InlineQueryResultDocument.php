<?php

namespace Milly\Laragram\Types;

/**
* InlineQueryResultDocument
 *
 *<p>*Optional*. Thumbnail height</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultdocument
 */
class InlineQueryResultDocument
{
    /**
    * <p>Type of the result, must be *document*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for this result, 1-64 bytes</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Title for the result</p>
    * @var string
    */
    public string $title;

    /**
    * <p>*Optional*. Caption of the document to be sent, 0-1024 characters after entities parsing</p>
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * <p>*Optional*. Mode for parsing entities in the document caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * <p>*Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * <p>A valid URL for the file</p>
    * @var string
    */
    public string $document_url;

    /**
    * <p>MIME type of the content of the file, either “application/pdf” or “application/zip”</p>
    * @var string
    */
    public string $mime_type;

    /**
    * <p>*Optional*. Short description of the result</p>
    * @var string|null
    */
    public ?string $description = null;

    /**
    * <p>*Optional*. Inline keyboard attached to the message</p>
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * <p>*Optional*. Content of the message to be sent instead of the file</p>
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;

    /**
    * <p>*Optional*. URL of the thumbnail (JPEG only) for the file</p>
    * @var string|null
    */
    public ?string $thumbnail_url = null;

    /**
    * <p>*Optional*. Thumbnail width</p>
    * @var int|null
    */
    public ?int $thumbnail_width = null;

    /**
    * <p>*Optional*. Thumbnail height</p>
    * @var int|null
    */
    public ?int $thumbnail_height = null;



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

        if (isset($data['thumbnail_url'])){
            $this->thumbnail_url = $data['thumbnail_url'];
        }

        if (isset($data['thumbnail_width'])){
            $this->thumbnail_width = $data['thumbnail_width'];
        }

        if (isset($data['thumbnail_height'])){
            $this->thumbnail_height = $data['thumbnail_height'];
        }

    }
}