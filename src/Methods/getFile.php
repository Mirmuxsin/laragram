<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* getFile
 *
 *Use this method to get basic information about a file and prepare it for downloading. For the moment, bots can download files of up to 20MB in size. On success, a [File](https://core.telegram.org/bots/api/#file) object is returned. The file can then be downloaded via the link `https://api.telegram.org/file/bot<token>/<file_path>`, where `<file_path>` is taken from the response. It is guaranteed that the link will be valid for at least 1 hour. When the link expires, a new one can be requested by calling [getFile](https://core.telegram.org/bots/api/#getfile) again.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#getfile
 * @abstract
 */
abstract class getFile extends Laragram
{
    /**
     * @var string file_id *(required: true)* File identifier to get information about
     * 
     * @access getFile
     */
     public static function getFile () {
        return true;
     }
}