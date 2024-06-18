<?php

namespace Milly\Laragram\Types;


/**
* TextQuote
 *
 *<p>*Optional*. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#textquote
 */
class TextQuote
{
    /**
    * <p>Text of the quoted part of a message that is replied to by the given message</p>
    * @var string
    */
    public string $text;

    /**
    * <p>*Optional*. Special entities that appear in the quote. Currently, only *bold*, *italic*, *underline*, *strikethrough*, *spoiler*, and *custom\_emoji* entities are kept in quotes.</p>
    * @var array|null
    */
    public ?array $entities = null;

    /**
    * <p>Approximate quote position in the original message in UTF-16 code units as specified by the sender</p>
    * @var int
    */
    public int $position;

    /**
    * <p>*Optional*. True, if the quote was chosen manually by the message sender. Otherwise, the quote was added automatically by the server.</p>
    * @var bool|null
    */
    public ?bool $is_manual = null;



    public function __construct($data)
    {
        $this->text = $data['text'];
        if (isset($data['entities'])){
            $this->entities = $data['entities'];
        }

        $this->position = $data['position'];
        if (isset($data['is_manual'])){
            $this->is_manual = $data['is_manual'];
        }

    }
}