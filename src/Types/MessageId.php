<?php

namespace Milly\Laragram\Types;

/**
* MessageId
 *
 *<p>Unique message identifier. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageid
 */
class MessageId
{
    /**
    * <p>Unique message identifier. In specific instances (e.g., message containing a video sent to a big chat), the server might automatically schedule a message instead of sending it immediately. In such cases, this field will be 0 and the relevant message will be unusable until it is actually sent</p>
    * @var int
    */
    public int $message_id;



    public function __construct($data)
    {
        $this->message_id = $data['message_id'];
    }
}