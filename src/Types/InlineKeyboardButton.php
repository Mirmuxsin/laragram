<?php

namespace Milly\Laragram\Types;


/**
* InlineKeyboardButton
 *
 *This object represents one button of an inline keyboard. You **must** use exactly one of the optional fields.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinekeyboardbutton
 */
class InlineKeyboardButton
{
    /**
    * Label text on the button
    * @var string
    */
    public string $text;

    /**
    * *Optional*. HTTP or tg:// URL to be opened when the button is pressed. Links `tg://user?id=<user_id>` can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.
    * @var string|null
    */
    public ?string $url = null;

    /**
    * *Optional*. Data to be sent in a [callback query](https://core.telegram.org/bots/api/#callbackquery) to the bot when button is pressed, 1-64 bytes
    * @var string|null
    */
    public ?string $callback_data = null;

    /**
    * *Optional*. Description of the [Web App](https://core.telegram.org/bots/webapps) that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method [answerWebAppQuery](https://core.telegram.org/bots/api/#answerwebappquery). Available only in private chats between a user and the bot.
    * @var WebAppInfo|null
    */
    public ?WebAppInfo $web_app = null;

    /**
    * *Optional*. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login).
    * @var LoginUrl|null
    */
    public ?LoginUrl $login_url = null;

    /**
    * *Optional*. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted.  

**Note:** This offers an easy way for users to start using your bot in [inline mode](https://core.telegram.org/bots/inline) when they are currently in a private chat with it. Especially useful when combined with [*switch\_pm…*](https://core.telegram.org/bots/api/#answerinlinequery) actions - in this case the user will be automatically returned to the chat they switched from, skipping the chat selection screen.
    * @var string|null
    */
    public ?string $switch_inline_query = null;

    /**
    * *Optional*. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.  

This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options.
    * @var string|null
    */
    public ?string $switch_inline_query_current_chat = null;

    /**
    * *Optional*. Description of the game that will be launched when the user presses the button.  

**NOTE:** This type of button **must** always be the first button in the first row.
    * @var CallbackGame|null
    */
    public ?CallbackGame $callback_game = null;

    /**
    * *Optional*. Specify *True*, to send a [Pay button](https://core.telegram.org/bots/api/#payments).  

**NOTE:** This type of button **must** always be the first button in the first row and can only be used in invoice messages.
    * @var bool|null
    */
    public ?bool $pay = null;



    public function __construct($data)
    {
        $this->text = $data['text'];
        if (isset($data['url'])){
            $this->url = $data['url'];
        }

        if (isset($data['callback_data'])){
            $this->callback_data = $data['callback_data'];
        }

        if (isset($data['web_app'])){
            $this->web_app = new WebAppInfo($data['web_app']);
        }

        if (isset($data['login_url'])){
            $this->login_url = new LoginUrl($data['login_url']);
        }

        if (isset($data['switch_inline_query'])){
            $this->switch_inline_query = $data['switch_inline_query'];
        }

        if (isset($data['switch_inline_query_current_chat'])){
            $this->switch_inline_query_current_chat = $data['switch_inline_query_current_chat'];
        }

        if (isset($data['callback_game'])){
            $this->callback_game = new CallbackGame($data['callback_game']);
        }

        if (isset($data['pay'])){
            $this->pay = $data['pay'];
        }

    }
}