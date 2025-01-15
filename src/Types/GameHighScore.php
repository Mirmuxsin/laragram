<?php

namespace Milly\Laragram\Types;

/**
* GameHighScore
 *
 *<p>Score</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#gamehighscore
 */
class GameHighScore
{
    /**
    * <p>Position in high score table for the game</p>
    * @var int
    */
    public int $position;

    /**
    * <p>User</p>
    * @var User
    */
    public User $user;

    /**
    * <p>Score</p>
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