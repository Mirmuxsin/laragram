<?php

namespace Milly\Laragram\Types;

/**
* UsersShared
 *
 *<p>This object contains information about the users whose identifiers were shared with the bot using a <a href="https://core.telegram.org/bots/api/#keyboardbuttonrequestusers">KeyboardButtonRequestUsers</a> button.</p>
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