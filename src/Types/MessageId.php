<?php

namespace Milly\Laragram\Types;


/**
* MessageId
 *
 *<p>Unique message identifier</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageid
 */
class MessageId
{
    /**
    * <p>Unique message identifier</p>
    * @var int
    */
    public int $message_id;



    public function __construct($data)
    {
        $this->message_id = $data['message_id'];
    }
}