<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* SentWebAppMessage
 *
 *Describes an inline message sent by a [Web App](https://core.telegram.org/bots/webapps) on behalf of a user.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sentwebappmessage
 */
class SentWebAppMessage extends Laragram
{
    /**
    * *Optional*. Identifier of the sent inline message. Available only if there is an [inline keyboard](https://core.telegram.org/bots/api/#inlinekeyboardmarkup) attached to the message.
    * @var string|null
    */
    public ?string $inline_message_id = null;



    public function __construct($data)
    {
        if (isset($data['inline_message_id'])){
            $this->inline_message_id = $data['inline_message_id'];
        }

    }
}