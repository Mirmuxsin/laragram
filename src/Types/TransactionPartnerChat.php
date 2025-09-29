<?php

namespace Milly\Laragram\Types;

/**
* TransactionPartnerChat
 *
 *<p>Describes a transaction with a chat.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#transactionpartnerchat
 */
class TransactionPartnerChat
{
    /**
    * <p>Type of the transaction partner, always “chat”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Information about the chat</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>*Optional*. The gift sent to the chat by the bot</p>
    * @var Gift|null
    */
    public ?Gift $gift = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->chat = new Chat($data['chat']);

        if (isset($data['gift'])){
            $this->gift = new Gift($data['gift']);
        }

    }
}