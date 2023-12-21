<?php

namespace Milly\Laragram\Types;


/**
* WriteAccessAllowed
 *
 *<p>*Optional*. True, if the access was granted when the bot was added to the attachment or side menu</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#writeaccessallowed
 */
class WriteAccessAllowed
{
    /**
    * <p>*Optional*. True, if the access was granted after the user accepted an explicit request from a Web App sent by the method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">requestWriteAccess</a></p>
    * @var bool|null
    */
    public ?bool $from_request = null;

    /**
    * <p>*Optional*. Name of the Web App, if the access was granted when the Web App was launched from a link</p>
    * @var string|null
    */
    public ?string $web_app_name = null;

    /**
    * <p>*Optional*. True, if the access was granted when the bot was added to the attachment or side menu</p>
    * @var bool|null
    */
    public ?bool $from_attachment_menu = null;



    public function __construct($data)
    {
        if (isset($data['from_request'])){
            $this->from_request = $data['from_request'];
        }

        if (isset($data['web_app_name'])){
            $this->web_app_name = $data['web_app_name'];
        }

        if (isset($data['from_attachment_menu'])){
            $this->from_attachment_menu = $data['from_attachment_menu'];
        }

    }
}