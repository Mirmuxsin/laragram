<?php

namespace Milly\Laragram;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Milly\Laragram\Methods\Methods;

class Laragram extends Methods
{
    public static string $url;
    public static ?string $token = null;
    /**
     * @throws Exception|GuzzleException
     */
    public static function __callStatic(string $name, array $arguments)
    {
        $get = self::request($name, $arguments);

        return json_decode($get, true);
    }

    /**
     * @throws GuzzleException
     */
    public static function request (string $method, array $array): string
    {
        $token = self::$token ?? config('laragram.token');
        $client = new Client([
            'verify' => false,
            'http_errors' => false
        ]);

        return $client->get("https://api.telegram.org/bot" . $token . "/" . $method, [
            "query" => $array,
            'http_errors' => false
        ])->getBody()->getContents();
    }

    public static function setUrl ($url) {
        return self::$url = $url;
    }

    public static function setToken($token)
    {
        return self::$token = $token;
    }
}
