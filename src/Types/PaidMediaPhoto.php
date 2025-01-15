<?php

namespace Milly\Laragram\Types;

/**
* PaidMediaPhoto
 *
 *<p>The photo</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#paidmediaphoto
 */
class PaidMediaPhoto
{
    /**
    * <p>Type of the paid media, always “photo”</p>
    * @var string
    */
    public string $type;

    /**
    * <p>The photo</p>
    * @var array
    */
    public array $photo;



    public function __construct($data)
    {
        $this->type = $data['type'];
        $this->photo = $data['photo'];
    }
}