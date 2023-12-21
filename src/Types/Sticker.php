<?php

namespace Milly\Laragram\Types;


/**
* Sticker
 *
 *<p>*Optional*. File size in bytes</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sticker
 */
class Sticker
{
    /**
    * <p>Identifier for this file, which can be used to download or reuse the file</p>
    * @var string
    */
    public string $file_id;

    /**
    * <p>Unique identifier for this file, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.</p>
    * @var string
    */
    public string $file_unique_id;

    /**
    * <p>Type of the sticker, currently one of “regular”, “mask”, “custom\<em>emoji”. The type of the sticker is independent from its format, which is determined by the fields *is\</em>animated* and *is\_video*.</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Sticker width</p>
    * @var int
    */
    public int $width;

    /**
    * <p>Sticker height</p>
    * @var int
    */
    public int $height;

    /**
    * <p>*True*, if the sticker is <a href="https://telegram.org/blog/animated-stickers">animated</a></p>
    * @var bool
    */
    public bool $is_animated;

    /**
    * <p>*True*, if the sticker is a <a href="https://telegram.org/blog/video-stickers-better-reactions">video sticker</a></p>
    * @var bool
    */
    public bool $is_video;

    /**
    * <p>*Optional*. Sticker thumbnail in the .WEBP or .JPG format</p>
    * @var PhotoSize|null
    */
    public ?PhotoSize $thumbnail = null;

    /**
    * <p>*Optional*. Emoji associated with the sticker</p>
    * @var string|null
    */
    public ?string $emoji = null;

    /**
    * <p>*Optional*. Name of the sticker set to which the sticker belongs</p>
    * @var string|null
    */
    public ?string $set_name = null;

    /**
    * <p>*Optional*. For premium regular stickers, premium animation for the sticker</p>
    * @var File|null
    */
    public ?File $premium_animation = null;

    /**
    * <p>*Optional*. For mask stickers, the position where the mask should be placed</p>
    * @var MaskPosition|null
    */
    public ?MaskPosition $mask_position = null;

    /**
    * <p>*Optional*. For custom emoji stickers, unique identifier of the custom emoji</p>
    * @var string|null
    */
    public ?string $custom_emoji_id = null;

    /**
    * <p>*Optional*. *True*, if the sticker must be repainted to a text color in messages, the color of the Telegram Premium badge in emoji status, white color on chat photos, or another appropriate color in other places</p>
    * @var bool|null
    */
    public ?bool $needs_repainting = null;

    /**
    * <p>*Optional*. File size in bytes</p>
    * @var int|null
    */
    public ?int $file_size = null;



    public function __construct($data)
    {
        $this->file_id = $data['file_id'];
        $this->file_unique_id = $data['file_unique_id'];
        $this->type = $data['type'];
        $this->width = $data['width'];
        $this->height = $data['height'];
        $this->is_animated = $data['is_animated'];
        $this->is_video = $data['is_video'];
        if (isset($data['thumbnail'])){
            $this->thumbnail = new PhotoSize($data['thumbnail']);
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

        if (isset($data['custom_emoji_id'])){
            $this->custom_emoji_id = $data['custom_emoji_id'];
        }

        if (isset($data['needs_repainting'])){
            $this->needs_repainting = $data['needs_repainting'];
        }

        if (isset($data['file_size'])){
            $this->file_size = $data['file_size'];
        }

    }
}