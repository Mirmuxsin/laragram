<?php

namespace Milly\Laragram\Types;


/**
* UsersShared
 *
 *<p>Information about users shared with the bot.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#usersshared
 */
class UsersShared
{
    /**
    * <p>Identifier of the request</p>
    * @var int
    */
    public int $request_id;

    /**
    * <p>Information about users shared with the bot.</p>
    * @var array
    */
    public array $users;



    public function __construct($data)
    {
        $this->request_id = $data['request_id'];
        $this->users = $data['users'];
    }
}