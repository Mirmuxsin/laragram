<?php

namespace Milly\Laragram\Types;


/**
* BotCommand
 *
 *<p>Description of the command; 1-256 characters.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#botcommand
 */
class BotCommand
{
    /**
    * <p>Text of the command; 1-32 characters. Can contain only lowercase English letters, digits and underscores.</p>
    * @var string
    */
    public string $command;

    /**
    * <p>Description of the command; 1-256 characters.</p>
    * @var string
    */
    public string $description;



    public function __construct($data)
    {
        $this->command = $data['command'];
        $this->description = $data['description'];
    }
}