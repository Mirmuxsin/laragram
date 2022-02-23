<?php

namespace Milly\Laragram;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Validator;
use Milly\Laragram\Updates\Chat\Chat;
use Milly\Laragram\Updates\Update;

class Laragram extends Update
{

    /**
     * To receive updates from request
     * @return Update
     */
    public static function update () {
        return Update::get();
    }

    /**
     * @return Request $array
     *
     * @throws \Exception
     * @throws GuzzleException
     */
    public static function sendMessage(array $array): Request
    {
        if (!isset($array['chat_id'])){
            $array['chat_id'] = Chat::id();
        }

        if (!isset($array['text'])){
            throw new \Exception('Message text is empty!');
        }

        return new Request('sendMessage', $array);
    }
}


