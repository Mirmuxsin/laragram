<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* MessageEntity
 *
 *This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageentity
 */
class MessageEntity extends Laragram
{
    /**
    * Type of the entity. Currently, can be “mention” (`@username`), “hashtag” (`#hashtag`), “cashtag” (`$USD`), “bot\_command” (`/start@jobs_bot`), “url” (`https://telegram.org`), “email” (`do-not-reply@telegram.org`), “phone\_number” (`+1-212-555-0123`), “bold” (**bold text**), “italic” (*italic text*), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “code” (monowidth string), “pre” (monowidth block), “text\_link” (for clickable text URLs), “text\_mention” (for users [without usernames](https://telegram.org/blog/edit#new-mentions))
    * @var string
    */
    public string $type;

    /**
    * Offset in UTF-16 code units to the start of the entity
    * @var int
    */
    public int $offset;

    /**
    * Length of the entity in UTF-16 code units
    * @var int
    */
    public int $length;

    /**
    * *Optional*. For “text\_link” only, URL that will be opened after user taps on the text
    * @var string|null
    */
    public ?string $url = null;

    /**
    * *Optional*. For “text\_mention” only, the mentioned user
    * @var User|null
    */
    public ?User $user = null;

    /**
    * *Optional*. For “pre” only, the programming language of the entity text
    * @var string|null
    */
    public ?string $language = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->offset = $data['offset'];
        $this->length = $data['length'];
        if (isset($data['url'])){
            $this->url = $data['url'];
        }

        if (isset($data['user'])){
            $this->user = new User($data['user']);
        }

        if (isset($data['language'])){
            $this->language = $data['language'];
        }

    }
}