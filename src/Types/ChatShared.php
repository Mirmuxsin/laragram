<?php

namespace Milly\Laragram\Types;


/**
* ChatShared
 *
 *<p>*Optional*. Available sizes of the chat photo, if the photo was requested by the bot</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatshared
 */
class ChatShared
{
    /**
    * <p>Identifier of the request</p>
    * @var int
    */
    public int $request_id;

    /**
    * <p>Identifier of the shared chat. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a 64-bit integer or double-precision float type are safe for storing this identifier. The bot may not have access to the chat and could be unable to use this identifier, unless the chat is already known to the bot by some other means.</p>
    * @var int
    */
    public int $chat_id;

    /**
    * <p>*Optional*. Title of the chat, if the title was requested by the bot.</p>
    * @var string|null
    */
    public ?string $title = null;

    /**
    * <p>*Optional*. Username of the chat, if the username was requested by the bot and available.</p>
    * @var string|null
    */
    public ?string $username = null;

    /**
    * <p>*Optional*. Available sizes of the chat photo, if the photo was requested by the bot</p>
    * @var array|null
    */
    public ?array $photo = null;



    public function __construct($data)
    {
        $this->request_id = $data['request_id'];
        $this->chat_id = $data['chat_id'];
        if (isset($data['title'])){
            $this->title = $data['title'];
        }

        if (isset($data['username'])){
            $this->username = $data['username'];
        }

        if (isset($data['photo'])){
            $this->photo = $data['photo'];
        }

    }
}