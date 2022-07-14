<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* LoginUrl
 *
 *This object represents a parameter of the inline keyboard button used to automatically authorize a user. Serves as a great replacement for the [Telegram Login Widget](https://core.telegram.org/widgets/login) when the user is coming from Telegram. All the user needs to do is tap/click a button and confirm that they want to log in:

Telegram apps support these buttons as of [version 5.7](https://telegram.org/blog/privacy-discussions-web-bots#meet-seamless-web-bots).

Sample bot: [@discussbot](https://t.me/discussbot)
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#loginurl
 */
class LoginUrl extends Laragram
{
    /**
    * An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in [Receiving authorization data](https://core.telegram.org/widgets/login#receiving-authorization-data).  

**NOTE:** You **must** always check the hash of the received data to verify the authentication and the integrity of the data as described in [Checking authorization](https://core.telegram.org/widgets/login#checking-authorization).
    * @var string
    */
    public string $url;

    /**
    * *Optional*. New text of the button in forwarded messages.
    * @var string|null
    */
    public ?string $forward_text = null;

    /**
    * *Optional*. Username of a bot, which will be used for user authorization. See [Setting up a bot](https://core.telegram.org/widgets/login#setting-up-a-bot) for more details. If not specified, the current bot's username will be assumed. The *url*'s domain must be the same as the domain linked with the bot. See [Linking your domain to the bot](https://core.telegram.org/widgets/login#linking-your-domain-to-the-bot) for more details.
    * @var string|null
    */
    public ?string $bot_username = null;

    /**
    * *Optional*. Pass *True* to request the permission for your bot to send messages to the user.
    * @var bool|null
    */
    public ?bool $request_write_access = null;



    public function __construct($data)
    {
        $this->url = $data['url'];
        if (isset($data['forward_text'])){
            $this->forward_text = $data['forward_text'];
        }

        if (isset($data['bot_username'])){
            $this->bot_username = $data['bot_username'];
        }

        if (isset($data['request_write_access'])){
            $this->request_write_access = $data['request_write_access'];
        }

    }
}