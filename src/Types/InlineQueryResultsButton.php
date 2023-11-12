<?php

namespace Milly\Laragram\Types;


/**
* InlineQueryResultsButton
 *
 *<p>*Optional*. <a href="https://core.telegram.org/bots/features#deep-linking">Deep-linking</a> parameter for the /start message sent to the bot when a user presses the button. 1-64 characters, only `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed.  </p><p>*Example:* An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an OAuth link. Once done, the bot can offer a <a href="https://core.telegram.org/bots/api/#inlinekeyboardmarkup">*switch\_inline*</a> button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultsbutton
 */
class InlineQueryResultsButton
{
    /**
    * <p>Label text on the button</p>
    * @var string
    */
    public string $text;

    /**
    * <p>*Optional*. Description of the <a href="https://core.telegram.org/bots/webapps">Web App</a> that will be launched when the user presses the button. The Web App will be able to switch back to the inline mode using the method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">switchInlineQuery</a> inside the Web App.</p>
    * @var WebAppInfo|null
    */
    public ?WebAppInfo $web_app = null;

    /**
    * <p>*Optional*. <a href="https://core.telegram.org/bots/features#deep-linking">Deep-linking</a> parameter for the /start message sent to the bot when a user presses the button. 1-64 characters, only `A-Z`, `a-z`, `0-9`, `_` and `-` are allowed.  </p><p>*Example:* An inline bot that sends YouTube videos can ask the user to connect the bot to their YouTube account to adapt search results accordingly. To do this, it displays a 'Connect your YouTube account' button above the results, or even before showing any. The user presses the button, switches to a private chat with the bot and, in doing so, passes a start parameter that instructs the bot to return an OAuth link. Once done, the bot can offer a <a href="https://core.telegram.org/bots/api/#inlinekeyboardmarkup">*switch\_inline*</a> button so that the user can easily return to the chat where they wanted to use the bot's inline capabilities.</p>
    * @var string|null
    */
    public ?string $start_parameter = null;



    public function __construct($data)
    {
        $this->text = $data['text'];
        if (isset($data['web_app'])){
            $this->web_app = new WebAppInfo($data['web_app']);
        }

        if (isset($data['start_parameter'])){
            $this->start_parameter = $data['start_parameter'];
        }

    }
}