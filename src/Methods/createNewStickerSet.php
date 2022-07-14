<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* createNewStickerSet
 *
 *Use this method to create a new sticker set owned by a user. The bot will be able to edit the sticker set thus created. You **must** use exactly one of the fields *png\_sticker*, *tgs\_sticker*, or *webm\_sticker*. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#createnewstickerset
 * @abstract
 */
abstract class createNewStickerSet extends Laragram
{
    /**
     * @var integer user_id *(required: true)* User identifier of created sticker set owner
     * @var string name *(required: true)**(min length: 1)**(max length: 1)* Short name of sticker set, to be used in `t.me/addstickers/` URLs (e.g., *animals*). Can contain only English letters, digits and underscores. Must begin with a letter, can't contain consecutive underscores and must end in `"_by_<bot_username>"`. `<bot_username>` is case insensitive. 1-64 characters.
     * @var string title *(required: true)**(min length: 1)**(max length: 1)* Sticker set title, 1-64 characters
     * @var \Milly\Laragram\Types\InputFile|string  png_sticker  **PNG** image with the sticker, must be up to 512 kilobytes in size, dimensions must not exceed 512px, and either width or height must be exactly 512px. Pass a *file\_id* as a String to send a file that already exists on the Telegram servers, pass an HTTP URL as a String for Telegram to get a file from the Internet, or upload a new one using multipart/form-data. [More information on Sending Files »](https://core.telegram.org/bots/api/#sending-files)
     * @var \Milly\Laragram\Types\InputFile tgs_sticker  **TGS** animation with the sticker, uploaded using multipart/form-data. See [https://core.telegram.org/stickers#animated-sticker-requirements](https://core.telegram.org/stickers#animated-sticker-requirements) for technical requirements
     * @var \Milly\Laragram\Types\InputFile webm_sticker  **WEBM** video with the sticker, uploaded using multipart/form-data. See [https://core.telegram.org/stickers#video-sticker-requirements](https://core.telegram.org/stickers#video-sticker-requirements) for technical requirements
     * @var string emojis *(required: true)* One or more emoji corresponding to the sticker
     * @var bool contains_masks  Pass *True*, if a set of mask stickers should be created
     * @var \Milly\Laragram\Types\MaskPosition mask_position  A JSON-serialized object for position where the mask should be placed on faces
     * 
     * @access createNewStickerSet
     */
     public static function createNewStickerSet () {
        return true;
     }
}