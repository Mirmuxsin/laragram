<?php

namespace Milly\Laragram\Types;

/**
* PaidMediaPurchased
 *
 *<p>Bot-specified paid media payload</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#paidmediapurchased
 */
class PaidMediaPurchased
{
    /**
    * <p>User who purchased the media</p>
    * @var User
    */
    public User $from;

    /**
    * <p>Bot-specified paid media payload</p>
    * @var string
    */
    public string $paid_media_payload;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['paid_media_purchased'];
        $this->from = new User($data['from']);

        $this->paid_media_payload = $data['paid_media_payload'];
    }
}