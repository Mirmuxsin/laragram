<?php

namespace Milly\Laragram\Types;


/**
* BotShortDescription
 *
 *This object represents the bot's short description.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botshortdescription
 */
class BotShortDescription
{
    /**
    * The bot's short description
    * @var string
    */
    public string $short_description;



    public function __construct($data)
    {
        $this->short_description = $data['short_description'];
    }
}