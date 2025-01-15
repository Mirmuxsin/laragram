<?php

namespace Milly\Laragram\Types;

/**
* InputPollOption
 *
 *<p>*Optional*. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of *text\<em>parse\</em>mode*</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputpolloption
 */
class InputPollOption
{
    /**
    * <p>Option text, 1-100 characters</p>
    * @var string
    */
    public string $text;

    /**
    * <p>*Optional*. Mode for parsing entities in the text. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details. Currently, only custom emoji entities are allowed</p>
    * @var string|null
    */
    public ?string $text_parse_mode = null;

    /**
    * <p>*Optional*. A JSON-serialized list of special entities that appear in the poll option text. It can be specified instead of *text\<em>parse\</em>mode*</p>
    * @var array|null
    */
    public ?array $text_entities = null;



    public function __construct($data)
    {
        $this->text = $data['text'];
        if (isset($data['text_parse_mode'])){
            $this->text_parse_mode = $data['text_parse_mode'];
        }

        if (isset($data['text_entities'])){
            $this->text_entities = $data['text_entities'];
        }

    }
}