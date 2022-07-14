<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setStickerSetThumb
 *
 *Use this method to set the thumbnail of a sticker set. Animated thumbnails can be set for animated sticker sets only. Video thumbnails can be set only for video sticker sets only. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setstickersetthumb
 * @abstract
 */
abstract class setStickerSetThumb extends Laragram
{
    /**
     * @var string name *(required: true)* Sticker set name
     * @var integer user_id *(required: true)* User identifier of the sticker set owner
     * @var \Milly\Laragram\Types\InputFile|string  thumb  A **PNG** image with the thumbnail, must be up to 128 kilobytes in size and have width and height exactly 100px, or a **TGS** animation with the thumbnail up to 32 kilobytes in size; see [https://core.telegram.org/stickers#animated-sticker-requirements](https://core.telegram.org/stickers#animated-sticker-requirements) for animated sticker technical requirements, or a **WEBM** video with the thumbnail up to 32 kilobytes in size; see [https://core.telegram.org/stickers#video-sticker-requirements](https://core.telegram.org/stickers#video-sticker-requirements) for video sticker technical requirements. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files). Animated sticker set thumbnails can't be uploaded via HTTP URL.
     * 
     * @access setStickerSetThumb
     */
     public static function setStickerSetThumb () {
        return true;
     }
}