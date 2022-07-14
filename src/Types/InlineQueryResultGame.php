<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* InlineQueryResultGame
 *
 *Represents a [Game](https://core.telegram.org/bots/api/#games).
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultgame
 */
class InlineQueryResultGame extends Laragram
{
    /**
    * Type of the result, must be *game*
    * @var string
    */
    public string $type;

    /**
    * Unique identifier for this result, 1-64 bytes
    * @var string
    */
    public string $id;

    /**
    * Short name of the game
    * @var string
    */
    public string $game_short_name;

    /**
    * *Optional*. [Inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating) attached to the message
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->game_short_name = $data['game_short_name'];
        if (isset($data['reply_markup'])){
            $this->reply_markup = new InlineKeyboardMarkup($data['reply_markup']);
        }

    }
}