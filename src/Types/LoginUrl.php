<?php

namespace Milly\Laragram\Types;

/**
* LoginUrl
 *
 *<p>*Optional*. Pass *True* to request the permission for your bot to send messages to the user.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#loginurl
 */
class LoginUrl
{
    /**
    * <p>An HTTPS URL to be opened with user authorization data added to the query string when the button is pressed. If the user refuses to provide authorization data, the original URL without information about the user will be opened. The data added is the same as described in <a href="https://core.telegram.org/widgets/login#receiving-authorization-data">Receiving authorization data</a>.  </p><p><strong>NOTE:</strong> You <strong>must</strong> always check the hash of the received data to verify the authentication and the integrity of the data as described in <a href="https://core.telegram.org/widgets/login#checking-authorization">Checking authorization</a>.</p>
    * @var string
    */
    public string $url;

    /**
    * <p>*Optional*. New text of the button in forwarded messages.</p>
    * @var string|null
    */
    public ?string $forward_text = null;

    /**
    * <p>*Optional*. Username of a bot, which will be used for user authorization. See <a href="https://core.telegram.org/widgets/login#setting-up-a-bot">Setting up a bot</a> for more details. If not specified, the current bot's username will be assumed. The *url*'s domain must be the same as the domain linked with the bot. See <a href="https://core.telegram.org/widgets/login#linking-your-domain-to-the-bot">Linking your domain to the bot</a> for more details.</p>
    * @var string|null
    */
    public ?string $bot_username = null;

    /**
    * <p>*Optional*. Pass *True* to request the permission for your bot to send messages to the user.</p>
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