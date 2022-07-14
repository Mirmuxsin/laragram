<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* uploadStickerFile
 *
 *Use this method to upload a .PNG file with a sticker for later use in *createNewStickerSet* and *addStickerToSet* methods (can be used multiple times). Returns the uploaded [File](https://core.telegram.org/bots/api/#file) on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#uploadstickerfile
 * @abstract
 */
abstract class uploadStickerFile extends Laragram
{
    /**
     * @var integer user_id *(required: true)* User identifier of sticker file owner
     * @var \Milly\Laragram\Types\InputFile png_sticker *(required: true)* **PNG** image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * 
     * @access uploadStickerFile
     */
     public static function uploadStickerFile () {
        return true;
     }
}