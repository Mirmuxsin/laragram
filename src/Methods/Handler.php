<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Request;

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

    /**
     * SendMessage
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function sendPhoto ($array)
    {
        return new Request('sendPhoto', $array);
    }

}
