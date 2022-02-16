<?php

namespace Milly\Laragram;

use Illuminate\Support\Facades\Validator;
use Milly\Laragram\Updates\Update;

class Laragram
{

    /**
     * To receive updates from request
     *
     * @return Update
     */
    public static function update () {
        return Update::get();
    }
}
