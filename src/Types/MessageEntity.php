<?php

namespace Milly\Laragram\Types;


/**
* MessageEntity
 *
 *<p>*Optional*. For “custom\_emoji” only, unique identifier of the custom emoji. Use <a href="https://core.telegram.org/bots/api/#getcustomemojistickers">getCustomEmojiStickers</a> to get full information about the sticker</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageentity
 */
class MessageEntity
{
    /**
    * <p>Type of the entity. Currently, can be “mention” (`@username`), “hashtag” (`#hashtag`), “cashtag” (`$USD`), “bot\<em>command” (`/start@jobs</em>bot`), “url” (`https://telegram.org`), “email” (`do-not-reply@telegram.org`), “phone\<em>number” (`+1-212-555-0123`), “bold” (<strong>bold text</strong>), “italic” (*italic text*), “underline” (underlined text), “strikethrough” (strikethrough text), “spoiler” (spoiler message), “blockquote” (block quotation), “expandable\</em>blockquote” (collapsed-by-default block quotation), “code” (monowidth string), “pre” (monowidth block), “text\<em>link” (for clickable text URLs), “text\</em>mention” (for users <a href="https://telegram.org/blog/edit#new-mentions">without usernames</a>), “custom\_emoji” (for inline custom emoji stickers)</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Offset in <a href="https://core.telegram.org/api/entities#entity-length">UTF-16 code units</a> to the start of the entity</p>
    * @var int
    */
    public int $offset;

    /**
    * <p>Length of the entity in <a href="https://core.telegram.org/api/entities#entity-length">UTF-16 code units</a></p>
    * @var int
    */
    public int $length;

    /**
    * <p>*Optional*. For “text\_link” only, URL that will be opened after user taps on the text</p>
    * @var string|null
    */
    public ?string $url = null;

    /**
    * <p>*Optional*. For “text\_mention” only, the mentioned user</p>
    * @var User|null
    */
    public ?User $user = null;

    /**
    * <p>*Optional*. For “pre” only, the programming language of the entity text</p>
    * @var string|null
    */
    public ?string $language = null;

    /**
    * <p>*Optional*. For “custom\_emoji” only, unique identifier of the custom emoji. Use <a href="https://core.telegram.org/bots/api/#getcustomemojistickers">getCustomEmojiStickers</a> to get full information about the sticker</p>
    * @var string|null
    */
    public ?string $custom_emoji_id = null;



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

        if (isset($data['custom_emoji_id'])){
            $this->custom_emoji_id = $data['custom_emoji_id'];
        }

    }
}