<?php

namespace Milly\Laragram\Types;


/**
* InlineQueryResultArticle
 *
 *Represents a link to an article or web page.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultarticle
 */
class InlineQueryResultArticle
{
    /**
    * Type of the result, must be *article*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for this result, 1-64 Bytes
    * @var string
    */
    public string $id;

    /**
    * Title of the result
    * @var string
    */
    public string $title;

    /**
    * Content of the message to be sent
    * @var InputMessageContent
    */
    public InputMessageContent $input_message_content;

    /**
    * *Optional*. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * *Optional*. URL of the result
    * @var string|null
    */
    public ?string $url = null;

    /**
    * *Optional*. Pass *True* if you don't want the URL to be shown in the message
    * @var bool|null
    */
    public ?bool $hide_url = null;

    /**
    * *Optional*. Short description of the result
    * @var string|null
    */
    public ?string $description = null;

    /**
    * *Optional*. Url of the thumbnail for the result
    * @var string|null
    */
    public ?string $thumbnail_url = null;

    /**
    * *Optional*. Thumbnail width
    * @var int|null
    */
    public ?int $thumbnail_width = null;

    /**
    * *Optional*. Thumbnail height
    * @var int|null
    */
    public ?int $thumbnail_height = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->input_message_content = new InputMessageContent($data['input_message_content']);

        if (isset($data['reply_markup'])){
            $this->reply_markup = new InlineKeyboardMarkup($data['reply_markup']);
        }

        if (isset($data['url'])){
            $this->url = $data['url'];
        }

        if (isset($data['hide_url'])){
            $this->hide_url = $data['hide_url'];
        }

        if (isset($data['description'])){
            $this->description = $data['description'];
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