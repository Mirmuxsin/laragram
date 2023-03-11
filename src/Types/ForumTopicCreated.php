<?php

namespace Milly\Laragram\Types;


/**
* ForumTopicCreated
 *
 *This object represents a service message about a new forum topic created in the chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#forumtopiccreated
 */
class ForumTopicCreated
{
    /**
    * Name of the topic
    * @var string
    */
    public string $name;

    /**
    * Color of the topic icon in RGB format
    * @var int
    */
    public int $icon_color;

    /**
    * *Optional*. Unique identifier of the custom emoji shown as the topic icon
    * @var string|null
    */
    public ?string $icon_custom_emoji_id = null;



    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->icon_color = $data['icon_color'];
        if (isset($data['icon_custom_emoji_id'])){
            $this->icon_custom_emoji_id = $data['icon_custom_emoji_id'];
        }

    }
}