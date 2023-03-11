<?php

namespace Milly\Laragram\Types;


/**
* ChatShared
 *
 *This object contains information about the chat whose identifier was shared with the bot using a [KeyboardButtonRequestChat](https://core.telegram.org/bots/api/#keyboardbuttonrequestchat) button.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatshared
 */
class ChatShared
{
    /**
    * Identifier of the request
    * @var int
    */
    public int $request_id;

    /**
    * Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.
    * @var int
    */
    public int $chat_id;



    public function __construct($data)
    {
        $this->request_id = $data['request_id'];
        $this->chat_id = $data['chat_id'];
    }
}