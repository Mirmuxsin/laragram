<?php

namespace Milly\Laragram\Types;


use Exception;
use Illuminate\Http\Request;
use function PHPUnit\Framework\throwException;
use Symfony\Component\HttpFoundation\IpUtils;
use Illuminate\Support\Facades\App;

class Handler {

    /**
     * Trusted Telegram IP addresses
     * @see https://core.telegram.org/bots/webhooks#the-short-version
     * @var array
     */
    protected static array $trustedIpNets = [
        '149.154.160.0/20',
        '91.108.4.0/22'
    ];

    /**
     * Local networks for debugging
     * @var array|string[]
     */
    protected static array $localIpNets = [
        '127.0.0.1/32',
        '10.0.0.0/8',
        '172.16.0.0/12',
        '192.168.0.0/16'
    ];

    /**
     * Get telegram updates from request
     *
     * @return array
     * @throws Exception
     */
    public static function get(): array
    {
        $request =  \request();
        return self::filterUpdate($request);
    }

    /**
     * Filter update
     *
     * @param Request $update
     * @return array
     * @throws Exception
     */
    private static function filterUpdate (Request $update) {

        if (App::environment('local') && IpUtils::checkIp($update->ip(), self::$localIpNets)) {
            return $update->all();
        }

        if (IpUtils::checkIp($update->ip(), self::$trustedIpNets)) {
            return $update->all();
        }

        if (!$update->get('update_id')){
            throw new Exception('update_id is not found!');
        }

        //return error.
        throw new Exception('Update validation failed!');
    }
}
