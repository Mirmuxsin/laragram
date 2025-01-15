<?php

namespace Milly\Laragram\Types;

/**
* WebAppInfo
 *
 *<p>An HTTPS URL of a Web App to be opened with additional data as specified in <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">Initializing Web Apps</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#webappinfo
 */
class WebAppInfo
{
    /**
    * <p>An HTTPS URL of a Web App to be opened with additional data as specified in <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">Initializing Web Apps</a></p>
    * @var string
    */
    public string $url;



    public function __construct($data)
    {
        $this->url = $data['url'];
    }
}