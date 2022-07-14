<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* sendGame
 *
 *Use this method to send a game. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sendgame
 * @abstract
 */
abstract class sendGame extends Laragram
{
    /**
     * @var integer chat_id *(required: true)* Unique identifier for the target chat
     * @var string game_short_name *(required: true)* Short name of the game, serves as the unique identifier for the game. Set up your games via [@BotFather](https://t.me/botfather).
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True*, if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating). If empty, one 'Play game\_title' button will be shown. If not empty, the first button must launch the game.
     * 
     * @access sendGame
     */
     public static function sendGame () {
        return true;
     }
}