<?php

namespace Milly\Laragram\Types;

/**
* MessageReactionUpdated
 *
 *<p>New list of reaction types that have been set by the user</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#messagereactionupdated
 */
class MessageReactionUpdated
{
    /**
    * <p>The chat containing the message the user reacted to</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>Unique identifier of the message inside the chat</p>
    * @var int
    */
    public int $message_id;

    /**
    * <p>*Optional*. The user that changed the reaction, if the user isn't anonymous</p>
    * @var User|null
    */
    public ?User $user = null;

    /**
    * <p>*Optional*. The chat on behalf of which the reaction was changed, if the user is anonymous</p>
    * @var Chat|null
    */
    public ?Chat $actor_chat = null;

    /**
    * <p>Date of the change in Unix time</p>
    * @var int
    */
    public int $date;

    /**
    * <p>Previous list of reaction types that were set by the user</p>
    * @var array
    */
    public array $old_reaction;

    /**
    * <p>New list of reaction types that have been set by the user</p>
    * @var array
    */
    public array $new_reaction;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['message_reaction_updated'];
        $this->chat = new Chat($data['chat']);

        $this->message_id = $data['message_id'];
        if (isset($data['user'])){
            $this->user = new User($data['user']);
        }

        if (isset($data['actor_chat'])){
            $this->actor_chat = new Chat($data['actor_chat']);
        }

        $this->date = $data['date'];
        $this->old_reaction = $data['old_reaction'];
        $this->new_reaction = $data['new_reaction'];
    }
}