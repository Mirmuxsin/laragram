<?php

namespace Milly\Laragram\Types;


/**
* UserProfilePhotos
 *
 *<p>Requested profile pictures (in up to 4 sizes each)</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#userprofilephotos
 */
class UserProfilePhotos
{
    /**
    * <p>Total number of profile pictures the target user has</p>
    * @var int
    */
    public int $total_count;

    /**
    * <p>Requested profile pictures (in up to 4 sizes each)</p>
    * @var array
    */
    public array $photos;



    public function __construct($data)
    {
        $this->total_count = $data['total_count'];
        $this->photos = $data['photos'];
    }
}