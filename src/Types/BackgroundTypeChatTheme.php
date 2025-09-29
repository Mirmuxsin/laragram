<?php

namespace Milly\Laragram\Types;

/**
* BackgroundTypeChatTheme
 *
 *<p>The background is taken directly from a built-in chat theme.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundtypechattheme
 */
class BackgroundTypeChatTheme
{
    /**
    * <p>Type of the background, always “chat\_theme”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Name of the chat theme, which is usually an emoji</p>
    * @var string
    */
    public string $theme_name;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->theme_name = $data['theme_name'];
    }
}