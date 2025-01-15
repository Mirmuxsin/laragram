<?php

namespace Milly\Laragram\Types;

/**
* BotName
 *
 *<p>The bot's name</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botname
 */
class BotName
{
    /**
    * <p>The bot's name</p>
    * @var string
    */
    public string $name;



    public function __construct($data)
    {
        $this->name = $data['name'];
    }
}