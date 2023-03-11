<?php

namespace Milly\Laragram\Types;


/**
* GameHighScore
 *
 *This object represents one row of the high scores table for a game.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#gamehighscore
 */
class GameHighScore
{
    /**
    * Position in high score table for the game
    * @var int
    */
    public int $position;

    /**
    * User
    * @var User
    */
    public User $user;

    /**
    * Score
    * @var int
    */
    public int $score;



    public function __construct($data)
    {
        $this->position = $data['position'];
        $this->user = new User($data['user']);

        $this->score = $data['score'];
    }
}