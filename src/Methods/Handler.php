<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Request;

class Handler {

    /**
     * SendMessage
     *
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function sendMessage ($array)
    {
        return SendMessage::sendMessage($array);
    }


    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public static function SendVideo ($array)
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
