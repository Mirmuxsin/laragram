<?php

namespace Milly\Laragram\Types;


/**
* InlineQueryResultContact
 *
 *Represents a contact with a phone number. By default, this contact will be sent by the user. Alternatively, you can use *input\_message\_content* to send a message with the specified content instead of the contact.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultcontact
 */
class InlineQueryResultContact
{
    /**
    * Type of the result, must be *contact*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for this result, 1-64 Bytes
    * @var string
    */
    public string $id;

    /**
    * Contact's phone number
    * @var string
    */
    public string $phone_number;

    /**
    * Contact's first name
    * @var string
    */
    public string $first_name;

    /**
    * *Optional*. Contact's last name
    * @var string|null
    */
    public ?string $last_name = null;

    /**
    * *Optional*. Additional data about the contact in the form of a [vCard](https://en.wikipedia.org/wiki/VCard), 0-2048 bytes
    * @var string|null
    */
    public ?string $vcard = null;

    /**
    * *Optional*. [Inline keyboard](https://core.telegram.org/bots/features#inline-keyboards) attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * *Optional*. Content of the message to be sent instead of the contact
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;

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