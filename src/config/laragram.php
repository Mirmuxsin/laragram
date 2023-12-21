<?php

return [
    'token' => env('TELEGRAM_BOT_TOKEN'),
    'url' => '/api/bot',

    // Trusted Telegram IP addresses or proxies
    'trusted_ips' => [
//        '127.0.0.1/32'
    ],
];
