<?php

namespace Milly\Laragram\Types;


/**
* InputTextMessageContent
 *
 *<p>*Optional*. Disables link previews for links in the sent message</p>
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
    * <p>*Optional*. Disables link previews for links in the sent message</p>
    * @var bool|null
    */
    public ?bool $disable_web_page_preview = null;



    public function __construct($data)
    {
        $this->message_text = $data['message_text'];
        if (isset($data['parse_mode'])){
            $this->parse_mode = $data['parse_mode'];
        }

        if (isset($data['entities'])){
            $this->entities = $data['entities'];
        }

        if (isset($data['disable_web_page_preview'])){
            $this->disable_web_page_preview = $data['disable_web_page_preview'];
        }

    }
}