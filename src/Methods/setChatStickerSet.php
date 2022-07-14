<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* setChatStickerSet
 *
 *Use this method to set a new group sticker set for a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field *can\_set\_sticker\_set* optionally returned in [getChat](https://core.telegram.org/bots/api/#getchat) requests to check if the bot can use this method. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#setchatstickerset
 * @abstract
 */
abstract class setChatStickerSet extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * @var string sticker_set_name *(required: true)* Name of the sticker set to be set as the group sticker set
     * 
     * @access setChatStickerSet
     */
     public static function setChatStickerSet () {
        return true;
     }
}