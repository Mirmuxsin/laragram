<?php

namespace Milly\Laragram\Types;

/**
* PaidMedia
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#paidmedia
 */
class PaidMedia
{


    public PaidMediaPreview $paidMediaPreview;

    public PaidMediaPhoto $paidMediaPhoto;

    public PaidMediaVideo $paidMediaVideo;



    public function __construct($data)
    {
        $this->paidMediaPreview = new PaidMediaPreview($data);
        $this->paidMediaPhoto = new PaidMediaPhoto($data);
        $this->paidMediaVideo = new PaidMediaVideo($data);
    }
}