<?php

namespace Milly\Laragram;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;


class Laragram {


    /**
     * @throws Exception|GuzzleException
     */
    public static function __callStatic(string $name, array $arguments)
    {
        $get = self::request($name, $arguments);

        if (!json_decode($get, true)['ok']) {
            return throw new Exception('Method can\'t be done: '.$get);
        }

        return json_decode($get, true);
    }

    /**
     * @throws GuzzleException
     */
    public static function request (string $method, array $array) {
        $token = config('laragram.token');
        $client = new Client();
        return $client->get("https://api.telegram.org/bot".$token."/$method", [
            "query" => $array[0]
        ])->getBody()->getContents();
    }

}
