<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Request;
use Milly\Laragram\Updates\Chat\Chat;

class SendMessage {

    /**
     * @param array $array
     * @return Request
     * @throws \GuzzleHttp\Exception\GuzzleException
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
