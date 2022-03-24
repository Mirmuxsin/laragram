<?php

namespace Milly\Laragram\Updates\Message;

use Milly\Laragram\Updates\Update;

class Message extends Update
{
    /**
     * Message array from Update
     * @return array
     */
    public static function message (): array
    {
        return self::get()->message;
    }

    /**
     * Get message id
     * @return integer
     */
    public static function message_id (): int
    {
        return self::message()['message_id'];
    }

    /**
     * Get message from
     * @return array
     */
    public static function from (): array
    {
        return 0;
    }
}
