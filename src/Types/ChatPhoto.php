<?php

namespace Milly\Laragram\Types;


/**
* ChatPhoto
 *
 *<p>Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#chatphoto
 */
class ChatPhoto
{
    /**
    * <p>File identifier of small (160x160) chat photo. This file\_id can be used only for photo download and only for as long as the photo is not changed.</p>
    * @var string
    */
    public string $small_file_id;

    /**
    * <p>Unique file identifier of small (160x160) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.</p>
    * @var string
    */
    public string $small_file_unique_id;

    /**
    * <p>File identifier of big (640x640) chat photo. This file\_id can be used only for photo download and only for as long as the photo is not changed.</p>
    * @var string
    */
    public string $big_file_id;

    /**
    * <p>Unique file identifier of big (640x640) chat photo, which is supposed to be the same over time and for different bots. Can't be used to download or reuse the file.</p>
    * @var string
    */
    public string $big_file_unique_id;



    public function __construct($data)
    {
        $this->small_file_id = $data['small_file_id'];
        $this->small_file_unique_id = $data['small_file_unique_id'];
        $this->big_file_id = $data['big_file_id'];
        $this->big_file_unique_id = $data['big_file_unique_id'];
    }
}