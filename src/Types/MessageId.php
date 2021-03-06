<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* MessageId
 *
 *This object represents a unique message identifier.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messageid
 */
class MessageId extends Laragram
{
    /**
    * Unique message identifier
    * @var int
    */
    public int $message_id;



    public function __construct($data)
    {
        $this->message_id = $data['message_id'];
    }
}