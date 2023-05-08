<?php

namespace Milly\Laragram\Types;


/**
* Game
 *
 *This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#game
 */
class Game
{
    /**
    * Title of the game
    * @var string
    */
    public string $title;

    /**
    * Description of the game
    * @var string
    */
    public string $description;

    /**
    * Photo that will be displayed in the game message in chats.
    * @var array
    */
    public array $photo;

    /**
    * *Optional*. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls [setGameScore](https://core.telegram.org/bots/api/#setgamescore), or manually edited using [editMessageText](https://core.telegram.org/bots/api/#editmessagetext). 0-4096 characters.
    * @var string|null
    */
    public ?string $text = null;

    /**
    * *Optional*. Special entities that appear in *text*, such as usernames, URLs, bot commands, etc.
    * @var array|null
    */
    public ?array $text_entities = null;

    /**
    * *Optional*. Animation that will be displayed in the game message in chats. Upload via [BotFather](https://t.me/botfather)
    * @var Animation|null
    */
    public ?Animation $animation = null;



    public function __construct($data)
    {
        $this->title = $data['title'];
        $this->description = $data['description'];
        $this->photo = $data['photo'];
        if (isset($data['text'])){
            $this->text = $data['text'];
        }

        if (isset($data['text_entities'])){
            $this->text_entities = $data['text_entities'];
        }

        if (isset($data['animation'])){
            $this->animation = new Animation($data['animation']);
        }

    }
}