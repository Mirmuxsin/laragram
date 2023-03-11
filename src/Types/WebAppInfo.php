<?php

namespace Milly\Laragram\Types;


/**
* WebAppInfo
 *
 *Describes a [Web App](https://core.telegram.org/bots/webapps).
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#webappinfo
 */
class WebAppInfo
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