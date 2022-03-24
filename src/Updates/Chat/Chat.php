<?php

namespace Milly\Laragram\Updates\Chat;

use Milly\Laragram\Updates\Message\Message;

class Chat extends Message
{
    /**
     * Get Chat from Update
     * @return array
     */
    public static function chat (): array
    {
        return self::message()['chat'];
    }

    /**
     * Get Chat id from chat
     * @return int
     */
    public static function id (): int
    {
        return self::chat()['id'];
    }

}
