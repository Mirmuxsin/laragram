<?php

namespace Milly\Laragram\Types;

/**
* BusinessIntro
 *
 *<p>*Optional*. Sticker of the business intro</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#businessintro
 */
class BusinessIntro
{
    /**
    * <p>*Optional*. Title text of the business intro</p>
    * @var string|null
    */
    public ?string $title = null;

    /**
    * <p>*Optional*. Message text of the business intro</p>
    * @var string|null
    */
    public ?string $message = null;

    /**
    * <p>*Optional*. Sticker of the business intro</p>
    * @var Sticker|null
    */
    public ?Sticker $sticker = null;



    public function __construct($data)
    {
        if (isset($data['title'])){
            $this->title = $data['title'];
        }

        if (isset($data['message'])){
            $this->message = $data['message'];
        }

        if (isset($data['sticker'])){
            $this->sticker = new Sticker($data['sticker']);
        }

    }
}