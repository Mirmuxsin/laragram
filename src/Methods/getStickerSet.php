<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getStickerSet
 *
 *Use this method to get a sticker set. On success, a [StickerSet](https://core.telegram.org/bots/api/#stickerset) object is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getstickerset
 * @abstract
 */
abstract class getStickerSet extends Laragram
{
    /**
     * @var string name *(required: true)* Name of the sticker set
     * 
     * @access getStickerSet
     */
     public static function getStickerSet () {
        return true;
     }
}