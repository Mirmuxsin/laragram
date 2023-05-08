<?php

namespace Milly\Laragram\Types;


/**
* ForumTopicEdited
 *
 *This object represents a service message about an edited forum topic.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#forumtopicedited
 */
class ForumTopicEdited
{
    /**
    * *Optional*. New name of the topic, if it was edited
    * @var string|null
    */
    public ?string $name = null;

    /**
    * *Optional*. New identifier of the custom emoji shown as the topic icon, if it was edited; an empty string if the icon was removed
    * @var string|null
    */
    public ?string $icon_custom_emoji_id = null;



    public function __construct($data)
    {
        if (isset($data['name'])){
            $this->name = $data['name'];
        }

        if (isset($data['icon_custom_emoji_id'])){
            $this->icon_custom_emoji_id = $data['icon_custom_emoji_id'];
        }

    }
}