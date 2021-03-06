<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* Sticker
 *
 *This object represents a sticker.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sticker
 */
class Sticker extends Laragram
{
    /**
    * Identifier for this file, which can be used to download or reuse the file
    * @var string
    */
    public string $file_id;

    /**
    * Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.
    * @var string
    */
    public string $file_unique_id;

    /**
    * Sticker width
    * @var int
    */
    public int $width;

    /**
    * Sticker height
    * @var int
    */
    public int $height;

    /**
    * *True*, if the sticker is [animated](https://telegram.org/blog/animated-stickers)
    * @var bool
    */
    public bool $is_animated;

    /**
    * *True*, if the sticker is a [video sticker](https://telegram.org/blog/video-stickers-better-reactions)
    * @var bool
    */
    public bool $is_video;

    /**
    * *Optional*. Sticker thumbnail in the .WEBP or .JPG format
    * @var PhotoSize|null
    */
    public ?PhotoSize $thumb = null;

    /**
    * *Optional*. Emoji associated with the sticker
    * @var string|null
    */
    public ?string $emoji = null;

    /**
    * *Optional*. Name of the sticker set to which the sticker belongs
    * @var string|null
    */
    public ?string $set_name = null;

    /**
    * *Optional*. Premium animation for the sticker, if the sticker is premium
    * @var File|null
    */
    public ?File $premium_animation = null;

    /**
    * *Optional*. For mask stickers, the position where the mask should be placed
    * @var MaskPosition|null
    */
    public ?MaskPosition $mask_position = null;

    /**
    * *Optional*. File size in bytes
    * @var int|null
    */
    public ?int $file_size = null;



    public function __construct($data)
    {
        $this->file_id = $data['file_id'];
        $this->file_unique_id = $data['file_unique_id'];
        $this->width = $data['width'];
        $this->height = $data['height'];
        $this->is_animated = $data['is_animated'];
        $this->is_video = $data['is_video'];
        if (isset($data['thumb'])){
            $this->thumb = new PhotoSize($data['thumb']);
        }

        if (isset($data['emoji'])){
            $this->emoji = $data['emoji'];
        }

        if (isset($data['set_name'])){
            $this->set_name = $data['set_name'];
        }

        if (isset($data['premium_animation'])){
            $this->premium_animation = new File($data['premium_animation']);
        }

        if (isset($data['mask_position'])){
            $this->mask_position = new MaskPosition($data['mask_position']);
        }

        if (isset($data['file_size'])){
            $this->file_size = $data['file_size'];
        }

    }
}