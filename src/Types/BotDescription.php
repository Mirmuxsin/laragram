<?php

namespace Milly\Laragram\Types;


/**
* BotDescription
 *
 *This object represents the bot's description.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botdescription
 */
class BotDescription
{
    /**
    * The bot's description
    * @var string
    */
    public string $description;



    public function __construct($data)
    {
        $this->description = $data['description'];
    }
}