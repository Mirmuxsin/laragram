<?php

namespace Milly\Laragram\Types;


/**
* StickerSet
 *
 *<p>*Optional*. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#stickerset
 */
class StickerSet
{
    /**
    * <p>Sticker set name</p>
    * @var string
    */
    public string $name;

    /**
    * <p>Sticker set title</p>
    * @var string
    */
    public string $title;

    /**
    * <p>Type of stickers in the set, currently one of “regular”, “mask”, “custom\_emoji”</p>
    * @var string
    */
    public string $sticker_type;

    /**
    * <p>*True*, if the sticker set contains <a href="https://telegram.org/blog/animated-stickers">animated stickers</a></p>
    * @var bool
    */
    public bool $is_animated;

    /**
    * <p>*True*, if the sticker set contains <a href="https://telegram.org/blog/video-stickers-better-reactions">video stickers</a></p>
    * @var bool
    */
    public bool $is_video;

    /**
    * <p>List of all set stickers</p>
    * @var array
    */
    public array $stickers;

    /**
    * <p>*Optional*. Sticker set thumbnail in the .WEBP, .TGS, or .WEBM format</p>
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