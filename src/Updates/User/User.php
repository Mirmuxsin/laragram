<?php

namespace Milly\Laragram\Updates\User;

use Milly\Laragram\Updates\Message\Message;

class User extends Message
{

    /**
     * Get User from update
     * @return array
     */
    public static function user (): array
    {
        return self::from();
    }

    /**
     * Get id from user
     * @return int
     */
    public static function id (): int
    {
        return self::user()['id'];
    }
}
