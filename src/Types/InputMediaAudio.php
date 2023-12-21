<?php

namespace Milly\Laragram\Types;


/**
* InputMediaAudio
 *
 *<p>*Optional*. Title of the audio</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inputmediaaudio
 */
class InputMediaAudio
{
    /**
    * <p>Type of the result, must be *audio*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>File to send. Pass a file\<em>id to send a file that exists on the Telegram servers (recommended), pass an HTTP URL for Telegram to get a file from the Internet, or pass “attach://\<file\</em>attach\<em>name\>” to upload a new one using multipart/form-data under \<file\</em>attach\_name\> name. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
    * @var string
    */
    public string $media;

    /**
    * <p>*Optional*. Thumbnail of the file sent; can be ignored if thumbnail generation for the file is supported server-side. The thumbnail should be in JPEG format and less than 200 kB in size. A thumbnail's width and height should not exceed 320. Ignored if the file is not uploaded using multipart/form-data. Thumbnails can't be reused and can be only uploaded as a new file, so you can pass “attach://\<file\<em>attach\</em>name\>” if the thumbnail was uploaded using multipart/form-data under \<file\<em>attach\</em>name\>. <a href="https://core.telegram.org/bots/api/#sending-files">More information on Sending Files »</a></p>
    * @var any_of|null
    */
    public ?any_of $thumbnail = null;

    /**
    * <p>*Optional*. Caption of the audio to be sent, 0-1024 characters after entities parsing</p>
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * <p>*Optional*. Mode for parsing entities in the audio caption. See <a href="https://core.telegram.org/bots/api/#formatting-options">formatting options</a> for more details.</p>
    * @var string|null
    */
    public ?string $parse_mode = null;

    /**
    * <p>*Optional*. List of special entities that appear in the caption, which can be specified instead of *parse\_mode*</p>
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * <p>*Optional*. Duration of the audio in seconds</p>
    * @var int|null
    */
    public ?int $duration = null;

    /**
    * <p>*Optional*. Performer of the audio</p>
    * @var string|null
    */
    public ?string $performer = null;

    /**
    * <p>*Optional*. Title of the audio</p>
    * @var string|null
    */
    public ?string $title = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->media = $data['media'];
        if (isset($data['thumbnail'])){
            $this->thumbnail = $data['thumbnail'];
        }

        if (isset($data['caption'])){
            $this->caption = $data['caption'];
        }

        if (isset($data['parse_mode'])){
            $this->parse_mode = $data['parse_mode'];
        }

        if (isset($data['caption_entities'])){
            $this->caption_entities = $data['caption_entities'];
        }

        if (isset($data['duration'])){
            $this->duration = $data['duration'];
        }

        if (isset($data['performer'])){
            $this->performer = $data['performer'];
        }

        if (isset($data['title'])){
            $this->title = $data['title'];
        }

    }
}