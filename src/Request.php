<?php

namespace Milly\Laragram;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Telegram\Bot\Traits\Telegram;

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
        try {

            $client = $guzzle->request('POST', 'https://api.telegram.org/bot' . $this->token . '/' . $method, [
                'query' => $array,
                'http_errors' => false
            ]);

            return $client->getBody();
        } catch (RequestException $e) {
            if ( config('app.debug') == true) {
                if ($e->getResponse()->getStatusCode() == 400 ) {
                    return Laragram::sendMessage([
                        'chat_id' => config('laragram.dev_id'),
                        'text' => "<b>Error: </b>\n<code>". json_encode(json_decode( $e->getResponse()->getBody()->getContents()), JSON_PRETTY_PRINT)
                            ."</code><b>\n\nFile: </b>\n<code>" . $e->getFile() ."</code>"
                            ."\n\n<b>Request: </b>\n|\n| — <b>Method: </b> <code>".$method."</code>\n| — <b>Data: </b>\n<code>". json_encode($array, JSON_PRETTY_PRINT) ."</code>",
                        "parse_mode" => 'html'
                    ]);
                }
            }
        }
    }
}
