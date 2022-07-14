<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InputTextMessageContent
 *
 *Represents the [content](https://core.telegram.org/bots/api/#inputmessagecontent) of a text message to be sent as the result of an inline query.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputtextmessagecontent
 */
class InputTextMessageContent extends Laragram
{
    /**
    * Text of the message to be sent, 1-4096 characters
    * @var string
    */
    public string $message_text;

    /**
    * *Optional*. Mode for parsing entities in the message text. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * *Optional*. List of special entities that appear in message text, which can be specified instead of *parse\_mode*
    * @var array|null
    */
    public ?array $entities = null;

    /**
    * *Optional*. Disables link previews for links in the sent message
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