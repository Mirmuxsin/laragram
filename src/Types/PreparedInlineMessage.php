<?php

namespace Milly\Laragram\Types;

/**
* PreparedInlineMessage
 *
 *<p>Describes an inline message to be sent by a user of a Mini App.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#preparedinlinemessage
 */
class PreparedInlineMessage
{
    /**
    * <p>Unique identifier of the prepared message</p>
    * @var string
    */
    public string $id;

    /**
    * <p>Expiration date of the prepared message, in Unix time. Expired prepared messages can no longer be used</p>
    * @var int
    */
    public int $expiration_date;



    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->expiration_date = $data['expiration_date'];
    }
}