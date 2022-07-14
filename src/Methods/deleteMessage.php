<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* deleteMessage
 *
 *Use this method to delete a message, including service messages, with the following limitations:  
\- A message can only be deleted if it was sent less than 48 hours ago.  
\- A dice message in a private chat can only be deleted if it was sent more than 24 hours ago.  
\- Bots can delete outgoing messages in private chats, groups, and supergroups.  
\- Bots can delete incoming messages in private chats.  
\- Bots granted *can\_post\_messages* permissions can delete outgoing messages in channels.  
\- If the bot is an administrator of a group, it can delete any message there.  
\- If the bot has *can\_delete\_messages* permission in a supergroup or a channel, it can delete any message there.  
Returns *True* on success.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#deletemessage
 * @abstract
 */
abstract class deleteMessage extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id *(required: true)* Identifier of the message to delete
     * 
     * @access deleteMessage
     */
     public static function deleteMessage () {
        return true;
     }
}