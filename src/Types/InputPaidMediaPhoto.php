<?php

namespace Milly\Laragram\Types;

/**
* InputPaidMediaPhoto
 *
 *<p>File to send. Pass a file\<em>id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://\<file\</em>attach\<em>name\>” to upload a new one using multipart/form-data under \<file\</em>attach\_name\> name. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputpaidmediaphoto
 */
class InputPaidMediaPhoto
{
    /**
    * <p>Type of the media, must be *photo*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>File to send. Pass a file\<em>id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://\<file\</em>attach\<em>name\>” to upload a new one using multipart/form-data under \<file\</em>attach\_name\> name. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
    * @var string
    */
    public string $media;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->media = $data['media'];
    }
}