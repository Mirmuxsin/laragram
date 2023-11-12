<?php

namespace Milly\Laragram\Types;


/**
* InlineQueryResultArticle
 *
 *<p>*Optional*. Thumbnail height</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultarticle
 */
class InlineQueryResultArticle
{
    /**
    * <p>Type of the result, must be *article*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for this result, 1-64 Bytes</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Title of the result</p>
    * @var string
    */
    public string $title;

    /**
    * <p>Content of the message to be sent</p>
    * @var InputMessageContent
    */
    public InputMessageContent $input_message_content;

    /**
    * <p>*Optional*. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message</p>
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * <p>*Optional*. URL of the result</p>
    * @var string|null
    */
    public ?string $url = null;

    /**
    * <p>*Optional*. Pass *True* if you don't want the URL to be shown in the message</p>
    * @var bool|null
    */
    public ?bool $hide_url = null;

    /**
    * <p>*Optional*. Short description of the result</p>
    * @var string|null
    */
    public ?string $description = null;

    /**
    * <p>*Optional*. Url of the thumbnail for the result</p>
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