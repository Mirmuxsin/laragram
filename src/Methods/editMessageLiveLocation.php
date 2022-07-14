<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* editMessageLiveLocation
 *
 *Use this method to edit live location messages. A location can be edited until its *live\_period* expires or editing is explicitly disabled by a call to [stopMessageLiveLocation](https://core.telegram.org/bots/api/#stopmessagelivelocation). On success, if the edited message is not an inline message, the edited [Message](https://core.telegram.org/bots/api/#message) is returned, otherwise *True* is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#editmessagelivelocation
 * @abstract
 */
abstract class editMessageLiveLocation extends Laragram
{
    /**
     * @var integer|string  chat_id  Required if *inline\_message\_id* is not specified. Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var integer message_id  Required if *inline\_message\_id* is not specified. Identifier of the message to edit
     * @var string inline_message_id  Required if *chat\_id* and *message\_id* are not specified. Identifier of the inline message
     * @var float latitude *(required: true)* Latitude of new location
     * @var float longitude *(required: true)* Longitude of new location
     * @var float horizontal_accuracy  The radius of uncertainty for the location, measured in meters; 0-1500
     * @var integer heading  Direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @var integer proximity_alert_radius  The maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup reply_markup  A JSON-serialized object for a new [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating).
     * 
     * @access editMessageLiveLocation
     */
     public static function editMessageLiveLocation () {
        return true;
     }
}