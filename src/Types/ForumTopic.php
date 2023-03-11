<?php

namespace Milly\Laragram\Types;


/**
* ForumTopic
 *
 *This object represents a forum topic.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#forumtopic
 */
class ForumTopic
{
    /**
    * Unique identifier of the forum topic
    * @var int
    */
    public int $message_thread_id;

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
        $this->message_thread_id = $data['message_thread_id'];
        $this->name = $data['name'];
        $this->icon_color = $data['icon_color'];
        if (isset($data['icon_custom_emoji_id'])){
            $this->icon_custom_emoji_id = $data['icon_custom_emoji_id'];
        }

    }
}