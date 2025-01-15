<?php

namespace Milly\Laragram\Types;

/**
* InlineQueryResultCachedAudio
 *
 *<p>*Optional*. Content of the message to be sent instead of the audio</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresultcachedaudio
 */
class InlineQueryResultCachedAudio
{
    /**
    * <p>Type of the result, must be *audio*</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Unique identifier for this result, 1-64 bytes</p>
    * @var string
    */
    public string $id;

    /**
    * <p>A valid file identifier for the audio file</p>
    * @var string
    */
    public string $audio_file_id;

    /**
    * <p>*Optional*. Caption, 0-1024 characters after entities parsing</p>
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
    * <p>*Optional*. <a href="https://core.telegram.org/bots/features#inline-keyboards">Inline keyboard</a> attached to the message</p>
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;

    /**
    * <p>*Optional*. Content of the message to be sent instead of the audio</p>
    * @var InputMessageContent|null
    */
    public ?InputMessageContent $input_message_content = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->id = $data['id'];
        $this->audio_file_id = $data['audio_file_id'];
        if (isset($data['caption'])){
            $this->caption = $data['caption'];
        }

        if (isset($data['parse_mode'])){
            $this->parse_mode = $data['parse_mode'];
        }

        if (isset($data['caption_entities'])){
            $this->caption_entities = $data['caption_entities'];
        }

        if (isset($data['reply_markup'])){
            $this->reply_markup = new InlineKeyboardMarkup($data['reply_markup']);
        }

        if (isset($data['input_message_content'])){
            $this->input_message_content = new InputMessageContent($data['input_message_content']);
        }

    }
}