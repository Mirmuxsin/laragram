<?php

namespace Milly\Laragram\Types;


/**
* ReactionTypeCustomEmoji
 *
 *<p>Custom emoji identifier</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#reactiontypecustomemoji
 */
class ReactionTypeCustomEmoji
{
    /**
    * <p>Type of the reaction, always “custom\_emoji”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Custom emoji identifier</p>
    * @var string
    */
    public string $custom_emoji_id;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->custom_emoji_id = $data['custom_emoji_id'];
    }
}