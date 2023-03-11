<?php

namespace Milly\Laragram\Types;


/**
* StickerSet
 *
 *This object represents a sticker set.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#stickerset
 */
class StickerSet
{
    /**
    * Sticker set name
    * @var string
    */
    public string $name;

    /**
    * Sticker set title
    * @var string
    */
    public string $title;

    /**
    * Type of stickers in the set, currently one of “regular”, “mask”, “custom\_emoji”
    * @var string
    */
    public string $sticker_type;

    /**
    * *True*, if the sticker set contains [animated stickers](https://telegram.org/blog/animated-stickers)
    * @var bool
    */
    public bool $is_animated;

    /**
    * *True*, if the sticker set contains [video stickers](https://telegram.org/blog/video-stickers-better-reactions)
    * @var bool
    */
    public bool $is_video;

    /**
    * List of all set stickers
    * @var array
    */
    public array $stickers;

    /**
    * *Optional*. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
    * @var PhotoSize|null
    */
    public ?PhotoSize $thumbnail = null;



    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->title = $data['title'];
        $this->sticker_type = $data['sticker_type'];
        $this->is_animated = $data['is_animated'];
        $this->is_video = $data['is_video'];
        $this->stickers = $data['stickers'];
        if (isset($data['thumbnail'])){
            $this->thumbnail = new PhotoSize($data['thumbnail']);
        }

    }
}