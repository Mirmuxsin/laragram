<?php

namespace Milly\Laragram\Types;

/**
* BusinessOpeningHoursInterval
 *
 *<p>The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 \* 24 \* 60</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#businessopeninghoursinterval
 */
class BusinessOpeningHoursInterval
{
    /**
    * <p>The minute's sequence number in a week, starting on Monday, marking the start of the time interval during which the business is open; 0 - 7 \* 24 \* 60</p>
    * @var int
    */
    public int $opening_minute;

    /**
    * <p>The minute's sequence number in a week, starting on Monday, marking the end of the time interval during which the business is open; 0 - 8 \* 24 \* 60</p>
    * @var int
    */
    public int $closing_minute;



    public function __construct($data)
    {
        $this->opening_minute = $data['opening_minute'];
        $this->closing_minute = $data['closing_minute'];
    }
}