<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* answerWebAppQuery
 *
 *Use this method to set the result of an interaction with a [Web App](https://core.telegram.org/bots/webapps) and send a corresponding message on behalf of the user to the chat from which the query originated. On success, a [SentWebAppMessage](https://core.telegram.org/bots/api/#sentwebappmessage) object is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#answerwebappquery
 * @abstract
 */
abstract class answerWebAppQuery extends Laragram
{
    /**
     * @var string web_app_query_id *(required: true)* Unique identifier for the query to be answered
     * @var \Milly\Laragram\Types\InlineQueryResult result *(required: true)* A JSON-serialized object describing the message to be sent
     * 
     * @access answerWebAppQuery
     */
     public static function answerWebAppQuery () {
        return true;
     }
}