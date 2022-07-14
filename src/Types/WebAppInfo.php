<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* WebAppInfo
 *
 *Describes a [Web App](https://core.telegram.org/bots/webapps).
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#webappinfo
 */
class WebAppInfo extends Laragram
{
    /**
    * An HTTPS URL of a Web App to be opened with additional data as specified in [Initializing Web Apps](https://core.telegram.org/bots/webapps#initializing-web-apps)
    * @var string
    */
    public string $url;



    public function __construct($data)
    {
        $this->url = $data['url'];
    }
}