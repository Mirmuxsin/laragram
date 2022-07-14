<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setStickerPositionInSet
 *
 *Use this method to move a sticker in a set created by the bot to a specific position. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setstickerpositioninset
 * @abstract
 */
abstract class setStickerPositionInSet extends Laragram
{
    /**
     * @var string sticker *(required: true)* File identifier of the sticker
     * @var integer position *(required: true)* New sticker position in the set, zero-based
     * 
     * @access setStickerPositionInSet
     */
     public static function setStickerPositionInSet () {
        return true;
     }
}