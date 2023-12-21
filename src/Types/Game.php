<?php

namespace Milly\Laragram\Types;


/**
* Game
 *
 *<p>*Optional*. Animation that will be displayed in the game message in chats. Upload via <a href="https://t.me/botfather">BotFather</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#game
 */
class Game
{
    /**
    * <p>Title of the game</p>
    * @var string
    */
    public string $title;

    /**
    * <p>Description of the game</p>
    * @var string
    */
    public string $description;

    /**
    * <p>Photo that will be displayed in the game message in chats.</p>
    * @var array
    */
    public array $photo;

    /**
    * <p>*Optional*. Brief description of the game or high scores included in the game message. Can be automatically edited to include current high scores for the game when the bot calls <a href="https://core.telegram.org/bots/api/#setgamescore">setGameScore</a>, or manually edited using <a href="https://core.telegram.org/bots/api/#editmessagetext">editMessageText</a>. 0-4096 characters.</p>
    * @var string|null
    */
    public ?string $text = null;

    /**
    * <p>*Optional*. Special entities that appear in *text*, such as usernames, URLs, bot commands, etc.</p>
    * @var array|null
    */
    public ?array $text_entities = null;

    /**
    * <p>*Optional*. Animation that will be displayed in the game message in chats. Upload via <a href="https://t.me/botfather">BotFather</a></p>
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