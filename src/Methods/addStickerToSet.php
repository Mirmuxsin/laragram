<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* addStickerToSet
 *
 *Use this method to add a new sticker to a set created by the bot. You **must** use exactly one of the fields *png\_sticker*, *tgs\_sticker*, or *webm\_sticker*. Animated stickers can be added to animated sticker sets and only to them. Animated sticker sets can have up to 50 stickers. Static sticker sets can have up to 120 stickers. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#addstickertoset
 * @abstract
 */
abstract class addStickerToSet extends Laragram
{
    /**
     * @var integer user_id *(required: true)* User identifier of sticker set owner
     * @var string name *(required: true)* Sticker set name
     * @var \Milly\Laragram\Types\InputFile|string  png_sticker  **PNG** image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var \Milly\Laragram\Types\InputFile tgs_sticker  **TGS** animation with the sticker, uploaded using multipart/form-data. See [https://core.telegram.org/stickers#animated-sticker-requirements](https://core.telegram.org/stickers#animated-sticker-requirements) for technical requirements
     * @var \Milly\Laragram\Types\InputFile webm_sticker  **WEBM** video with the sticker, uploaded using multipart/form-data. See [https://core.telegram.org/stickers#video-sticker-requirements](https://core.telegram.org/stickers#video-sticker-requirements) for technical requirements
     * @var string emojis *(required: true)* One or more emoji corresponding to the sticker
     * @var \Milly\Laragram\Types\MaskPosition mask_position  A JSON-serialized object for position where the mask should be placed on faces
     * 
     * @access addStickerToSet
     */
     public static function addStickerToSet () {
        return true;
     }
}