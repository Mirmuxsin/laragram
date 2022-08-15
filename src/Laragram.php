<?php

namespace Milly\Laragram;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * @method static array sendMessage(array $data)
 * @method static array sendPhoto(array $data)
 * @method static array sendAudio(array $data)
 * @method static array sendDocument(array $data)
 * @method static array sendVideo(array $data)
 * @method static array sendAnimation(array $data)
 * @method static array sendVoice(array $data)
 * @method static array sendVideoNote(array $data)
 * @method static array sendMediaGroup(array $data)
 * @method static array sendLocation(array $data)
 * @method static array sendVenue(array $data)
 * @method static array sendContact(array $data)
 * @method static array sendPoll(array $data)
 * @method static array sendDice(array $data)
 * @method static array sendChatAction(array $data)
 * @method static array forwardMessage(array $data)
 * @method static array copyMessage(array $data)
 * @method static array getFile(array $data)
 * @method static array getUserProfilePhotos(array $data)
 */
class Laragram
{
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
        $client = new Client([
            'verify' => false,
        ]);

        return $client->get("https://api.telegram.org/bot" . $token . "/" . $method, [
            "query" => $array[0]
        ])->getBody()->getContents();
    }
}
