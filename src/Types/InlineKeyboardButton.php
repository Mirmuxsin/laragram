<?php

namespace Milly\Laragram\Types;


/**
* InlineKeyboardButton
 *
 *<p>*Optional*. Specify *True*, to send a <a href="https://core.telegram.org/bots/api/#payments">Pay button</a>.  </p><p><strong>NOTE:</strong> This type of button <strong>must</strong> always be the first button in the first row and can only be used in invoice messages.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinekeyboardbutton
 */
class InlineKeyboardButton
{
    /**
    * <p>Label text on the button</p>
    * @var string
    */
    public string $text;

    /**
    * <p>*Optional*. HTTP or tg:// URL to be opened when the button is pressed. Links `tg://user?id=<user_id>` can be used to mention a user by their ID without using a username, if this is allowed by their privacy settings.</p>
    * @var string|null
    */
    public ?string $url = null;

    /**
    * <p>*Optional*. Data to be sent in a <a href="https://core.telegram.org/bots/api/#callbackquery">callback query</a> to the bot when button is pressed, 1-64 bytes</p>
    * @var string|null
    */
    public ?string $callback_data = null;

    /**
    * <p>*Optional*. Description of the <a href="https://core.telegram.org/bots/webapps">Web App</a> that will be launched when the user presses the button. The Web App will be able to send an arbitrary message on behalf of the user using the method <a href="https://core.telegram.org/bots/api/#answerwebappquery">answerWebAppQuery</a>. Available only in private chats between a user and the bot.</p>
    * @var WebAppInfo|null
    */
    public ?WebAppInfo $web_app = null;

    /**
    * <p>*Optional*. An HTTPS URL used to automatically authorize the user. Can be used as a replacement for the <a href="https://core.telegram.org/widgets/login">Telegram Login Widget</a>.</p>
    * @var LoginUrl|null
    */
    public ?LoginUrl $login_url = null;

    /**
    * <p>*Optional*. If set, pressing the button will prompt the user to select one of their chats, open that chat and insert the bot's username and the specified inline query in the input field. May be empty, in which case just the bot's username will be inserted.</p>
    * @var string|null
    */
    public ?string $switch_inline_query = null;

    /**
    * <p>*Optional*. If set, pressing the button will insert the bot's username and the specified inline query in the current chat's input field. May be empty, in which case only the bot's username will be inserted.  </p><p>This offers a quick way for the user to open your bot in inline mode in the same chat - good for selecting something from multiple options.</p>
    * @var string|null
    */
    public ?string $switch_inline_query_current_chat = null;

    /**
    * <p>*Optional*. If set, pressing the button will prompt the user to select one of their chats of the specified type, open that chat and insert the bot's username and the specified inline query in the input field</p>
    * @var SwitchInlineQueryChosenChat|null
    */
    public ?SwitchInlineQueryChosenChat $switch_inline_query_chosen_chat = null;

    /**
    * <p>*Optional*. Description of the game that will be launched when the user presses the button.  </p><p><strong>NOTE:</strong> This type of button <strong>must</strong> always be the first button in the first row.</p>
    * @var CallbackGame|null
    */
    public ?CallbackGame $callback_game = null;

    /**
    * <p>*Optional*. Specify *True*, to send a <a href="https://core.telegram.org/bots/api/#payments">Pay button</a>.  </p><p><strong>NOTE:</strong> This type of button <strong>must</strong> always be the first button in the first row and can only be used in invoice messages.</p>
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

        if (isset($data['switch_inline_query_chosen_chat'])){
            $this->switch_inline_query_chosen_chat = new SwitchInlineQueryChosenChat($data['switch_inline_query_chosen_chat']);
        }

        if (isset($data['callback_game'])){
            $this->callback_game = new CallbackGame($data['callback_game']);
        }

        if (isset($data['pay'])){
            $this->pay = $data['pay'];
        }

    }
}