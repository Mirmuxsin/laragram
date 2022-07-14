<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* VideoChatParticipantsInvited
 *
 *This object represents a service message about new members invited to a video chat.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#videochatparticipantsinvited
 */
class VideoChatParticipantsInvited extends Laragram
{
    /**
    * New members that were invited to the video chat
    * @var array
    */
    public array $users;



    public function __construct($data)
    {
        $this->users = $data['users'];
    }
}