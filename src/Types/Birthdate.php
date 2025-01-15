<?php

namespace Milly\Laragram\Types;

/**
* Birthdate
 *
 *<p>*Optional*. Year of the user's birth</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#birthdate
 */
class Birthdate
{
    /**
    * <p>Day of the user's birth; 1-31</p>
    * @var int
    */
    public int $day;

    /**
    * <p>Month of the user's birth; 1-12</p>
    * @var int
    */
    public int $month;

    /**
    * <p>*Optional*. Year of the user's birth</p>
    * @var int|null
    */
    public ?int $year = null;



    public function __construct($data)
    {
        $this->day = $data['day'];
        $this->month = $data['month'];
        if (isset($data['year'])){
            $this->year = $data['year'];
        }

    }
}