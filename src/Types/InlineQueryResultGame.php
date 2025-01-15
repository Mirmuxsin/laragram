<?php

namespace Milly\Laragram\Types;

/**
* InlineQueryResultGame
 *
 *<p>*Optional*. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultgame
 */
class InlineQueryResultGame
{
    /**
    * <p>Type of the result, must be *game*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for this result, 1-64 bytes</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Short name of the game</p>
    * @var string
    */
    public string $game_short_name;

    /**
    * <p>*Optional*. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message</p>
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