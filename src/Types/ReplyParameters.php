<?php

namespace Milly\Laragram\Types;


/**
* ReplyParameters
 *
 *<p>*Optional*. Position of the quote in the original message in UTF-16 code units</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#replyparameters
 */
class ReplyParameters
{
    /**
    * <p>Identifier of the message that will be replied to in the current chat, or in the chat *chat\_id* if it is specified</p>
    * @var int
    */
    public int $message_id;

    /**
    * <p>*Optional*. If the message to be replied to is from a different chat, unique identifier for the chat or username of the channel (in the format `@channelusername`). Not supported for messages sent on behalf of a business account.</p>
    * @var any_of|null
    */
    public ?any_of $chat_id = null;

    /**
    * <p>*Optional*. Pass *True* if the message should be sent even if the specified message to be replied to is not found. Always *False* for replies in another chat or forum topic. Always *True* for messages sent on behalf of a business account.</p>
    * @var bool|null
    */
    public ?bool $allow_sending_without_reply = null;

    /**
    * <p>*Optional*. Quoted part of the message to be replied to; 0-1024 characters after entities parsing. The quote must be an exact substring of the message to be replied to, including *bold*, *italic*, *underline*, *strikethrough*, *spoiler*, and *custom\_emoji* entities. The message will fail to send if the quote isn't found in the original message.</p>
    * @var string|null
    */
    public ?string $quote = null;

    /**
    * <p>*Optional*. Mode for parsing entities in the quote. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
    * @var string|null
    */
    public ?string $quote_parse_mode = null;

    /**
    * <p>*Optional*. A JSON-serialized list of special entities that appear in the quote. It can be specified instead of *quote\<em>parse\</em>mode*.</p>
    * @var array|null
    */
    public ?array $quote_entities = null;

    /**
    * <p>*Optional*. Position of the quote in the original message in UTF-16 code units</p>
    * @var int|null
    */
    public ?int $quote_position = null;



    public function __construct($data)
    {
        $this->message_id = $data['message_id'];
        if (isset($data['chat_id'])){
            $this->chat_id = $data['chat_id'];
        }

        if (isset($data['allow_sending_without_reply'])){
            $this->allow_sending_without_reply = $data['allow_sending_without_reply'];
        }

        if (isset($data['quote'])){
            $this->quote = $data['quote'];
        }

        if (isset($data['quote_parse_mode'])){
            $this->quote_parse_mode = $data['quote_parse_mode'];
        }

        if (isset($data['quote_entities'])){
            $this->quote_entities = $data['quote_entities'];
        }

        if (isset($data['quote_position'])){
            $this->quote_position = $data['quote_position'];
        }

    }
}