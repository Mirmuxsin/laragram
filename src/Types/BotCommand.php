<?php

namespace Milly\Laragram\Types;


/**
* BotCommand
 *
 *This object represents a bot command.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommand
 */
class BotCommand
{
    /**
    * Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.
    * @var string
    */
    public string $command;

    /**
    * Description of the command; 1-256 characters.
    * @var string
    */
    public string $description;



    public function __construct($data)
    {
        $this->command = $data['command'];
        $this->description = $data['description'];
    }
}