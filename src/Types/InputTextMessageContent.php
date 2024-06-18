<?php

namespace Milly\Laragram\Types;


/**
* InputTextMessageContent
 *
 *<p>*Optional*. Link preview generation options for the message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputtextmessagecontent
 */
class InputTextMessageContent
{
    /**
    * <p>Text of the message to be sent, 1-4096 characters</p>
    * @var string
    */
    public string $message_text;

    /**
    * <p>*Optional*. Mode for parsing entities in the message text. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * <p>*Optional*. List of special entities that appear in message text, which can be specified instead of *parse\_mode*</p>
    * @var array|null
    */
    public ?array $entities = null;

    /**
    * <p>*Optional*. Link preview generation options for the message</p>
    * @var LinkPreviewOptions|null
    */
    public ?LinkPreviewOptions $link_preview_options = null;



    public function __construct($data)
    {
        $this->message_text = $data['message_text'];
        if (isset($data['parse_mode'])){
            $this->parse_mode = $data['parse_mode'];
        }

        if (isset($data['entities'])){
            $this->entities = $data['entities'];
        }

        if (isset($data['link_preview_options'])){
            $this->link_preview_options = new LinkPreviewOptions($data['link_preview_options']);
        }

    }
}