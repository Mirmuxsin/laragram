<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* StickerSet
 *
 *This object represents a sticker set.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#stickerset
 */
class StickerSet extends Laragram
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
    * *True*, if the sticker set contains masks
    * @var bool
    */
    public bool $contains_masks;

    /**
    * List of all set stickers
    * @var array
    */
    public array $stickers;

    /**
    * *Optional*. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format
    * @var PhotoSize|null
    */
    public ?PhotoSize $thumb = null;



    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->title = $data['title'];
        $this->is_animated = $data['is_animated'];
        $this->is_video = $data['is_video'];
        $this->contains_masks = $data['contains_masks'];
        $this->stickers = $data['stickers'];
        if (isset($data['thumb'])){
            $this->thumb = new PhotoSize($data['thumb']);
        }

    }
}