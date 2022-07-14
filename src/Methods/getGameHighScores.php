<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getGameHighScores
 *
 *Use this method to get data for high score tables. Will return the score of the specified user and several of their neighbors in a game. On success, returns an *Array* of [GameHighScore](https://core.telegram.org/bots/api/#gamehighscore) objects.

This method will currently return scores for the target user, plus two of their closest neighbors on each side. Will also return the top three users if the user and their neighbors are not among them. Please note that this behavior is subject to change.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getgamehighscores
 * @abstract
 */
abstract class getGameHighScores extends Laragram
{
    /**
     * @var integer user_id *(required: true)* Target user id
     * @var integer chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the sent message
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * 
     * @access getGameHighScores
     */
     public static function getGameHighScores () {
        return true;
     }
}