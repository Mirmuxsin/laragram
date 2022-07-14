<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* answerShippingQuery
 *
 *If you sent an invoice requesting a shipping address and the parameter *is\_flexible* was specified, the Bot API will send an [Update](https://core.telegram.org/bots/api/#update) with a *shipping\_query* field to the bot. Use this method to reply to shipping queries. On success, *True* is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#answershippingquery
 * @abstract
 */
abstract class answerShippingQuery extends Laragram
{
    /**
     * @var string shipping_query_id *(required: true)* Unique identifier for the query to be answered
     * @var bool ok *(required: true)* Specify *True* if delivery to the specified address is possible and False if there are any problems (for example, if delivery to the specified address is not possible)
     * @var array shipping_options  Required if *ok* is *True*. A JSON-serialized array of available shipping options.
     * @var string error_message  Required if *ok* is False. Error message in human readable form that explains why it is impossible to complete the order (e.g. "Sorry, delivery to your desired address is unavailable'). Telegram will display this message to the user.
     * 
     * @access answerShippingQuery
     */
     public static function answerShippingQuery () {
        return true;
     }
}