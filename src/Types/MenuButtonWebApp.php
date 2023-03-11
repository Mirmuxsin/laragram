<?php

namespace Milly\Laragram\Types;


/**
* MenuButtonWebApp
 *
 *Represents a menu button, which launches a [Web App](https://core.telegram.org/bots/webapps).
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#menubuttonwebapp
 */
class MenuButtonWebApp
{
    /**
    * Type of the button, must be *web\_app*
    * @var string
    */
    public string $type;

    /**
    * Text on the button
    * @var string
    */
    public string $text;

    /**
    * Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method [answerWebAppQuery](https://core.telegram.org/bots/api/#answerwebappquery).
    * @var WebAppInfo
    */
    public WebAppInfo $web_app;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->text = $data['text'];
        $this->web_app = new WebAppInfo($data['web_app']);

    }
}