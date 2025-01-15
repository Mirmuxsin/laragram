<?php

namespace Milly\Laragram\Types;

/**
* BackgroundType
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundtype
 */
class BackgroundType
{


    public BackgroundTypeFill $backgroundTypeFill;

    public BackgroundTypeWallpaper $backgroundTypeWallpaper;

    public BackgroundTypePattern $backgroundTypePattern;

    public BackgroundTypeChatTheme $backgroundTypeChatTheme;



    public function __construct($data)
    {
        $this->backgroundTypeFill = new BackgroundTypeFill($data);
        $this->backgroundTypeWallpaper = new BackgroundTypeWallpaper($data);
        $this->backgroundTypePattern = new BackgroundTypePattern($data);
        $this->backgroundTypeChatTheme = new BackgroundTypeChatTheme($data);
    }
}