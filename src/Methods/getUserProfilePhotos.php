<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getUserProfilePhotos
 *
 *Use this method to get a list of profile pictures for a user. Returns a [UserProfilePhotos](https://core.telegram.org/bots/api/#userprofilephotos) object.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getuserprofilephotos
 * @abstract
 */
abstract class getUserProfilePhotos extends Laragram
{
    /**
     * @var integer user_id *(required: true)* Unique identifier of the target user
     * @var integer offset  Sequential number of the first photo to be returned. By default, all photos are returned.
     * @var integer limit *(default: 100)* Limits the number of photos to be retrieved. Values between 1-100 are accepted. Defaults to 100.
     * 
     * @access getUserProfilePhotos
     */
     public static function getUserProfilePhotos () {
        return true;
     }
}