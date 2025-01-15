<?php

namespace Milly\Laragram\Types;

/**
* InputSticker
 *
 *<p>*Optional*. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom\_emoji” stickers only.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputsticker
 */
class InputSticker
{
    /**
    * <p>The added sticker. Pass a *file\<em>id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, upload a new one using multipart/form-data, or pass “attach://\<file\</em>attach\<em>name\>” to upload a new one using multipart/form-data under \<file\</em>attach\_name\> name. Animated and video stickers can't be uploaded via HTTP URL. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
    * @var any_of
    */
    public any_of $sticker;

    /**
    * <p>Format of the added sticker, must be one of “static” for a <strong>.WEBP</strong> or <strong>.PNG</strong> image, “animated” for a <strong>.TGS</strong> animation, “video” for a <strong>.WEBM</strong> video</p>
    * @var string
    */
    public string $format;

    /**
    * <p>List of 1-20 emoji associated with the sticker</p>
    * @var array
    */
    public array $emoji_list;

    /**
    * <p>*Optional*. Position where the mask should be placed on faces. For “mask” stickers only.</p>
    * @var MaskPosition|null
    */
    public ?MaskPosition $mask_position = null;

    /**
    * <p>*Optional*. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom\_emoji” stickers only.</p>
    * @var array|null
    */
    public ?array $keywords = null;



    public function __construct($data)
    {
        $this->sticker = $data['sticker'];
        $this->format = $data['format'];
        $this->emoji_list = $data['emoji_list'];
        if (isset($data['mask_position'])){
            $this->mask_position = new MaskPosition($data['mask_position']);
        }

        if (isset($data['keywords'])){
            $this->keywords = $data['keywords'];
        }

    }
}