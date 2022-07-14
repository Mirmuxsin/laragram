<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* Dice
 *
 *This object represents an animated emoji that displays a random value.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#dice
 */
class Dice extends Laragram
{
    /**
    * Emoji on which the dice throw animation is based
    * @var string
    */
    public string $emoji;

    /**
    * Value of the dice, 1-6 for “🎲”, “🎯” and “🎳” base emoji, 1-5 for “🏀” and “⚽” base emoji, 1-64 for “🎰” base emoji
    * @var int
    */
    public int $value;



    public function __construct($data)
    {
        $this->emoji = $data['emoji'];
        $this->value = $data['value'];
    }
}