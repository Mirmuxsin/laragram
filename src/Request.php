<?php

namespace Milly\Laragram;

use GuzzleHttp\Client;

class Request
{

    protected $token;

    /**
     * Set token
     */
    public function token(): string
    {
        return $this->token = config('laragram.token');
    }

    /**
     * @param $method string
     * @param $array array
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function __construct(string $method, array $array)
    {
        self::token();
        $guzzle = new Client();
        $client = $guzzle->request('POST', 'https://api.telegram.org/bot' . $this->token . '/' . $method, [
            'query' => $array
        ]);
        return $client->getBody();
    }
}
