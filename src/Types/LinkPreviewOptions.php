<?php

namespace Milly\Laragram\Types;


/**
* LinkPreviewOptions
 *
 *<p>*Optional*. *True*, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#linkpreviewoptions
 */
class LinkPreviewOptions
{
    /**
    * <p>*Optional*. *True*, if the link preview is disabled</p>
    * @var bool|null
    */
    public ?bool $is_disabled = null;

    /**
    * <p>*Optional*. URL to use for the link preview. If empty, then the first URL found in the message text will be used</p>
    * @var string|null
    */
    public ?string $url = null;

    /**
    * <p>*Optional*. *True*, if the media in the link preview is supposed to be shrunk; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview</p>
    * @var bool|null
    */
    public ?bool $prefer_small_media = null;

    /**
    * <p>*Optional*. *True*, if the media in the link preview is supposed to be enlarged; ignored if the URL isn't explicitly specified or media size change isn't supported for the preview</p>
    * @var bool|null
    */
    public ?bool $prefer_large_media = null;

    /**
    * <p>*Optional*. *True*, if the link preview must be shown above the message text; otherwise, the link preview will be shown below the message text</p>
    * @var bool|null
    */
    public ?bool $show_above_text = null;



    public function __construct($data)
    {
        if (isset($data['is_disabled'])){
            $this->is_disabled = $data['is_disabled'];
        }

        if (isset($data['url'])){
            $this->url = $data['url'];
        }

        if (isset($data['prefer_small_media'])){
            $this->prefer_small_media = $data['prefer_small_media'];
        }

        if (isset($data['prefer_large_media'])){
            $this->prefer_large_media = $data['prefer_large_media'];
        }

        if (isset($data['show_above_text'])){
            $this->show_above_text = $data['show_above_text'];
        }

    }
}