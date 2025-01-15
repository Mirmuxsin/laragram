<?php

namespace Milly\Laragram\Types;

/**
* BotShortDescription
 *
 *<p>The bot's short description</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botshortdescription
 */
class BotShortDescription
{
    /**
    * <p>The bot's short description</p>
    * @var string
    */
    public string $short_description;



    public function __construct($data)
    {
        $this->short_description = $data['short_description'];
    }
}