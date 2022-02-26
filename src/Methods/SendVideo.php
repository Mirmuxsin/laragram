<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Request;
use Milly\Laragram\Updates\Chat\Chat;

class SendVideo {
    /**
     * @param array $array
     * @return Request
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function sendVideo(array $array): Request
    {
        if (!isset($array['chat_id'])){
            $array['chat_id'] = Chat::id();
        }

        if (!isset($array['video'])){
            throw new \Exception('Message text is empty!');
        }

        return new Request('sendVideo', $array);
    }
}
