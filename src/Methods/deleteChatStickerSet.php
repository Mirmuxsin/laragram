<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* deleteChatStickerSet
 *
 *Use this method to delete a group sticker set from a supergroup. The bot must be an administrator in the chat for this to work and must have the appropriate administrator rights. Use the field *can\_set\_sticker\_set* optionally returned in [getChat](https://core.telegram.org/bots/api/#getchat) requests to check if the bot can use this method. Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#deletechatstickerset
 * @abstract
 */
abstract class deleteChatStickerSet extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target supergroup (in the format `@supergroupusername`)
     * 
     * @access deleteChatStickerSet
     */
     public static function deleteChatStickerSet () {
        return true;
     }
}