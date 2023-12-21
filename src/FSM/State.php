<?php

namespace Milly\Laragram\FSM;

use Milly\Laragram\FSM\FSM;
use Milly\Laragram\Laragram;
use Milly\Laragram\Types\Update;

class State
{
    public bool $handeWrongInput = false;
    public function handleWrongInput(Update $update) :void
    {
        Laragram::sendMessage(
            FSM::getUserId(),
            text: 'Wrong input',
        );
    }
}
