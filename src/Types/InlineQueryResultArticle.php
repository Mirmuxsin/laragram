<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InlineQueryResultArticle
 *
 *Represents a link to an article or web page.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultarticle
 */
class InlineQueryResultArticle extends Laragram
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
    * *Optional*. [Inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * *Optional*. URL of the result
    * @var string|null
    */
    public ?string $url = null;

    /**
    * *Optional*. Pass *True*, if you don't want the URL to be shown in the message
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