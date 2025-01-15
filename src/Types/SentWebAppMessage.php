<?php

namespace Milly\Laragram\Types;

/**
* SentWebAppMessage
 *
 *<p>*Optional*. Identifier of the sent inline message. Available only if there is an <a href="https://core.telegram.org/bots/api/#inlinekeyboardmarkup">inline keyboard</a> attached to the message.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sentwebappmessage
 */
class SentWebAppMessage
{
    /**
    * <p>*Optional*. Identifier of the sent inline message. Available only if there is an <a href="https://core.telegram.org/bots/api/#inlinekeyboardmarkup">inline keyboard</a> attached to the message.</p>
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