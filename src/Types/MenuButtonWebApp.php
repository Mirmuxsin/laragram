<?php

namespace Milly\Laragram\Types;


/**
* MenuButtonWebApp
 *
 *<p>Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method <a href="https://core.telegram.org/bots/api/#answerwebappquery">answerWebAppQuery</a>.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#menubuttonwebapp
 */
class MenuButtonWebApp
{
    /**
    * <p>Type of the button, must be *web\_app*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Text on the button</p>
    * @var string
    */
    public string $text;

    /**
    * <p>Description of the Web App that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method <a href="https://core.telegram.org/bots/api/#answerwebappquery">answerWebAppQuery</a>.</p>
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