<?php

namespace Milly\Laragram\Updates;

use function PHPUnit\Framework\throwException;
use Symfony\Component\HttpFoundation\IpUtils;
use Illuminate\Support\Facades\App;

class Update {


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
     * @return Update|mixed |request|
     * @throws \Exception
     */
    public static function get() {
            $request =  \request();
            return self::filterUpdate($request);
    }

    /**
     * Filter update
     *
     * @param $update
     * @return mixed |update
     * @throws \Exception
     */
    private static function filterUpdate ($update) {
        if (App::environment('local') && IpUtils::checkIp($update->ip(), self::$localIpNets)) {
            return $update;
        }

        if (IpUtils::checkIp($update->ip(), self::$trustedIpNets)) {
            return $update;
        }

        //return error.
        return throwException('Validation update failed!');
    }
}
