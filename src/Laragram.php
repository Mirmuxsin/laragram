<?php

namespace Milly\Laragram;

use Illuminate\Support\Facades\Validator;

class Laragram
{

    /**
     * To receive updates from request
     *
     * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|string
     */
    public function update () {
        $request =  \request();
//        $validate = $request->validate([
//            'update_id' => 'required|int',
//        ]);


        return $request;
    }
}
