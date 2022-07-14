<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* deleteStickerFromSet
 *
 *Use this method to delete a sticker from a set created by the bot. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#deletestickerfromset
 * @abstract
 */
abstract class deleteStickerFromSet extends Laragram
{
    /**
     * @var string sticker *(required: true)* File identifier of the sticker
     * 
     * @access deleteStickerFromSet
     */
     public static function deleteStickerFromSet () {
        return true;
     }
}