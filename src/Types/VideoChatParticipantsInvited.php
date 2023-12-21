<?php

namespace Milly\Laragram\Types;


/**
* VideoChatParticipantsInvited
 *
 *<p>New members that were invited to the video chat</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#videochatparticipantsinvited
 */
class VideoChatParticipantsInvited
{
    /**
    * <p>New members that were invited to the video chat</p>
    * @var array
    */
    public array $users;



    public function __construct($data)
    {
        $this->users = $data['users'];
    }
}