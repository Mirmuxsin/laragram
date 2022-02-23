<?php

namespace Milly\Laragram\Methods;

class Handler {

    /**
     * SendMessage
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function sendMessage ($array): \Milly\Laragram\Request
    {
        return SendMessage::sendMessage($array);
    }


    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function SendVideo ($array): \Milly\Laragram\Request
    {
        return SendVideo::sendVideo($array);
    }

}
