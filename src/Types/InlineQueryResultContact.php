<?php

namespace Milly\Laragram\Types;

/**
* InlineQueryResultContact
 *
 *<p>*Optional*. Thumbnail height</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultcontact
 */
class InlineQueryResultContact
{
    /**
    * <p>Type of the result, must be *contact*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for this result, 1-64 Bytes</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Contact's phone number</p>
    * @var string
    */
    public string $phone_number;

    /**
    * <p>Contact's first name</p>
    * @var string
    */
    public string $first_name;

    /**
    * <p>*Optional*. Contact's last name</p>
    * @var string|null
    */
    public ?string $last_name = null;

    /**
    * <p>*Optional*. Additional data about the contact in the form of a <a href="https://en.wikipedia.org/wiki/VCard">vCard</a>, 0-2048 bytes</p>
    * @var string|null
    */
    public ?string $vcard = null;

    /**
    * <p>*Optional*. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message</p>
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * <p>*Optional*. Content of the message to be sent instead of the contact</p>
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;

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
        $this->phone_number = $data['phone_number'];
        $this->first_name = $data['first_name'];
        if (isset($data['last_name'])){
            $this->last_name = $data['last_name'];
        }

        if (isset($data['vcard'])){
            $this->vcard = $data['vcard'];
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