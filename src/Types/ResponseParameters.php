<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* ResponseParameters
 *
 *Describes why a request was unsuccessful.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#responseparameters
 */
class ResponseParameters extends Laragram
{
    /**
    * *Optional*. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
    * @var int|null
    */
    public ?int $migrate_to_chat_id = null;

    /**
    * *Optional*. In case of exceeding flood control, the number of seconds left to wait before the request can be repeated
    * @var int|null
    */
    public ?int $retry_after = null;



    public function __construct($data)
    {
        if (isset($data['migrate_to_chat_id'])){
            $this->migrate_to_chat_id = $data['migrate_to_chat_id'];
        }

        if (isset($data['retry_after'])){
            $this->retry_after = $data['retry_after'];
        }

    }
}