<?php

namespace Milly\Laragram\Types;

/**
* BusinessMessagesDeleted
 *
 *<p>The list of identifiers of deleted messages in the chat of the business account</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#businessmessagesdeleted
 */
class BusinessMessagesDeleted
{
    /**
    * <p>Unique identifier of the business connection</p>
    * @var string
    */
    public string $business_connection_id;

    /**
    * <p>Information about a chat in the business account. The bot may not have access to the chat or the corresponding user.</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>The list of identifiers of deleted messages in the chat of the business account</p>
    * @var array
    */
    public array $message_ids;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['business_messages_deleted'];
        $this->business_connection_id = $data['business_connection_id'];
        $this->chat = new Chat($data['chat']);

        $this->message_ids = $data['message_ids'];
    }
}