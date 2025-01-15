<?php

namespace Milly\Laragram\Types;

/**
* PaidMediaInfo
 *
 *<p>Information about the paid media</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#paidmediainfo
 */
class PaidMediaInfo
{
    /**
    * <p>The number of Telegram Stars that must be paid to buy access to the media</p>
    * @var int
    */
    public int $star_count;

    /**
    * <p>Information about the paid media</p>
    * @var array
    */
    public array $paid_media;



    public function __construct($data)
    {
        $this->star_count = $data['star_count'];
        $this->paid_media = $data['paid_media'];
    }
}