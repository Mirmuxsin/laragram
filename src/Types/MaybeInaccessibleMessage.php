<?php

namespace Milly\Laragram\Types;

/**
* MaybeInaccessibleMessage
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#maybeinaccessiblemessage
 */
class MaybeInaccessibleMessage
{


    public Message $message;

    public InaccessibleMessage $inaccessibleMessage;



    public function __construct($data)
    {
        $this->message = new Message($data);
        $this->inaccessibleMessage = new InaccessibleMessage($data);
    }
}