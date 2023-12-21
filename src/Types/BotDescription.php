<?php

namespace Milly\Laragram\Types;


/**
* BotDescription
 *
 *<p>The bot's description</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botdescription
 */
class BotDescription
{
    /**
    * <p>The bot's description</p>
    * @var string
    */
    public string $description;



    public function __construct($data)
    {
        $this->description = $data['description'];
    }
}