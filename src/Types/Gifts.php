<?php

namespace Milly\Laragram\Types;

/**
* Gifts
 *
 *<p>The list of gifts</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#gifts
 */
class Gifts
{
    /**
    * <p>The list of gifts</p>
    * @var array
    */
    public array $gifts;



    public function __construct($data)
    {
        $this->gifts = $data['gifts'];
    }
}