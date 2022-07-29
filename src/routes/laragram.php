<?php

use Milly\Laragram\FSM\FSM;
use App\Http\Controllers\HomeController;

FSM::route('', [HomeController::class, 'home'], [
    (new \Milly\Laragram\Types\Update())->message
]);
