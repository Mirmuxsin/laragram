<?php

namespace Milly\Laragram;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Support\Facades\Validator;
use Milly\Laragram\Updates\Chat\Chat;
use Milly\Laragram\Updates\Update;
use Milly\Laragram\Methods\Handler;
use Milly\Laragram\Request as RequestAlias;

class Laragram extends Handler
{

    /**
     * To receive updates from request
     * @return Update
     */
    public static function update () {
        return Update::get();
    }

    public static function editMessageReplyMarkup(array $array)
    {
        return new RequestAlias('editMessageReplyMarkup', $array);
    }

    public static function answerCallbackQuery($array) {
        return new RequestAlias('answerCallbackQuery', $array);
    }

    /**
     * @throws GuzzleException
     */
    public function __call($method, $data) {
        return new RequestAlias($method, $data);
    }

//    /**
//     * @param array $array
//     * @return Request
//     * @throws \GuzzleHttp\Exception\GuzzleException
//     */
//    public static function sendMessage(array $array): Request
//    {
//        if (!isset($array['chat_id'])){
//            $array['chat_id'] = Chat::id();
//        }
//
//        if (!isset($array['text'])){
//            throw new \Exception('Message text is empty!');
//        }
//
//        return new Request('sendMessage', $array);
//    }

}


