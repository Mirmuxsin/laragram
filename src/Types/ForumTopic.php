<?php

namespace Milly\Laragram\Types;


/**
* ForumTopic
 *
 *<p>*Optional*. Unique identifier of the custom emoji shown as the topic icon</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#forumtopic
 */
class ForumTopic
{
    /**
    * <p>Unique identifier of the forum topic</p>
    * @var int
    */
    public int $message_thread_id;

    /**
    * <p>Name of the topic</p>
    * @var string
    */
    public string $name;

    /**
    * <p>Color of the topic icon in RGB format</p>
    * @var int
    */
    public int $icon_color;

    /**
    * <p>*Optional*. Unique identifier of the custom emoji shown as the topic icon</p>
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