<?php

namespace Milly\Laragram\Types;


/**
* KeyboardButton
 *
 *<p>*Optional*. If specified, the described <a href="https://core.telegram.org/bots/webapps">Web App</a> will be launched when the button is pressed. The Web App will be able to send a “web\<em>app\</em>data” service message. Available in private chats only.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#keyboardbutton
 */
class KeyboardButton
{
    /**
    * <p>Text of the button. If none of the optional fields are used, it will be sent as a message when the button is pressed</p>
    * @var string
    */
    public string $text;

    /**
    * <p>*Optional.* If specified, pressing the button will open a list of suitable users. Tapping on any user will send their identifier to the bot in a “user\_shared” service message. Available in private chats only.</p>
    * @var KeyboardButtonRequestUser|null
    */
    public ?KeyboardButtonRequestUser $request_user = null;

    /**
    * <p>*Optional.* If specified, pressing the button will open a list of suitable chats. Tapping on a chat will send its identifier to the bot in a “chat\_shared” service message. Available in private chats only.</p>
    * @var KeyboardButtonRequestChat|null
    */
    public ?KeyboardButtonRequestChat $request_chat = null;

    /**
    * <p>*Optional*. If *True*, the user's phone number will be sent as a contact when the button is pressed. Available in private chats only.</p>
    * @var bool|null
    */
    public ?bool $request_contact = null;

    /**
    * <p>*Optional*. If *True*, the user's current location will be sent when the button is pressed. Available in private chats only.</p>
    * @var bool|null
    */
    public ?bool $request_location = null;

    /**
    * <p>*Optional*. If specified, the user will be asked to create a poll and send it to the bot when the button is pressed. Available in private chats only.</p>
    * @var KeyboardButtonPollType|null
    */
    public ?KeyboardButtonPollType $request_poll = null;

    /**
    * <p>*Optional*. If specified, the described <a href="https://core.telegram.org/bots/webapps">Web App</a> will be launched when the button is pressed. The Web App will be able to send a “web\<em>app\</em>data” service message. Available in private chats only.</p>
    * @var WebAppInfo|null
    */
    public ?WebAppInfo $web_app = null;



    public function __construct($data)
    {
        $this->text = $data['text'];
        if (isset($data['request_user'])){
            $this->request_user = new KeyboardButtonRequestUser($data['request_user']);
        }

        if (isset($data['request_chat'])){
            $this->request_chat = new KeyboardButtonRequestChat($data['request_chat']);
        }

        if (isset($data['request_contact'])){
            $this->request_contact = $data['request_contact'];
        }

        if (isset($data['request_location'])){
            $this->request_location = $data['request_location'];
        }

        if (isset($data['request_poll'])){
            $this->request_poll = new KeyboardButtonPollType($data['request_poll']);
        }

        if (isset($data['web_app'])){
            $this->web_app = new WebAppInfo($data['web_app']);
        }

    }
}