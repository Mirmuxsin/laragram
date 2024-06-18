<?php

namespace Milly\Laragram\Types;


/**
* BackgroundTypePattern
 *
 *<p>*Optional*. *True*, if the background moves slightly when the device is tilted</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#backgroundtypepattern
 */
class BackgroundTypePattern
{
    /**
    * <p>Type of the background, always “pattern”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>Document with the pattern</p>
    * @var Document
    */
    public Document $document;

    /**
    * <p>The background fill that is combined with the pattern</p>
    * @var BackgroundFill
    */
    public BackgroundFill $fill;

    /**
    * <p>Intensity of the pattern when it is shown above the filled background; 0-100</p>
    * @var int
    */
    public int $intensity;

    /**
    * <p>*Optional*. *True*, if the background fill must be applied only to the pattern itself. All other pixels are black in this case. For dark themes only</p>
    * @var bool|null
    */
    public ?bool $is_inverted = null;

    /**
    * <p>*Optional*. *True*, if the background moves slightly when the device is tilted</p>
    * @var bool|null
    */
    public ?bool $is_moving = null;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->document = new Document($data['document']);

        $this->fill = new BackgroundFill($data['fill']);

        $this->intensity = $data['intensity'];
        if (isset($data['is_inverted'])){
            $this->is_inverted = $data['is_inverted'];
        }

        if (isset($data['is_moving'])){
            $this->is_moving = $data['is_moving'];
        }

    }
}