<?php

namespace Milly\Laragram\Types;


/**
* InputSticker
 *
 *This object describes a sticker to be added to a sticker set.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputsticker
 */
class InputSticker
{
    /**
    * The added sticker. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. Animated and video stickers can't be uploaded via HTTP URL. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
    * @var any_of
    */
    public any_of $sticker;

    /**
    * List of 1-20 emoji associated with the sticker
    * @var array
    */
    public array $emoji_list;

    /**
    * *Optional*. Position where the mask should be placed on faces. For “mask” stickers only.
    * @var MaskPosition|null
    */
    public ?MaskPosition $mask_position = null;

    /**
    * *Optional*. List of 0-20 search keywords for the sticker with total length of up to 64 characters. For “regular” and “custom\_emoji” stickers only.
    * @var array|null
    */
    public ?array $keywords = null;



    public function __construct($data)
    {
        $this->sticker = $data['sticker'];
        $this->emoji_list = $data['emoji_list'];
        if (isset($data['mask_position'])){
            $this->mask_position = new MaskPosition($data['mask_position']);
        }

        if (isset($data['keywords'])){
            $this->keywords = $data['keywords'];
        }

    }
}