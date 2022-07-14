<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* UserProfilePhotos
 *
 *This object represent a user's profile pictures.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#userprofilephotos
 */
class UserProfilePhotos extends Laragram
{
    /**
    * Total number of profile pictures the target user has
    * @var int
    */
    public int $total_count;

    /**
    * Requested profile pictures (in up to 4 sizes each)
    * @var array
    */
    public array $photos;



    public function __construct($data)
    {
        $this->total_count = $data['total_count'];
        $this->photos = $data['photos'];
    }
}