<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* sendLocation
 *
 *Use this method to send point on the map. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sendlocation
 * @abstract
 */
abstract class sendLocation extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var float latitude *(required: true)* Latitude of the location
     * @var float longitude *(required: true)* Longitude of the location
     * @var float horizontal_accuracy  The radius of uncertainty for the location, measured in meters; 0-1500
     * @var integer live_period  Period in seconds for which the location will be updated (see [Live Locations](https://telegram.org/blog/live-locations), should be between 60 and 86400.
     * @var integer heading  For live locations, a direction in which the user is moving, in degrees. Must be between 1 and 360 if specified.
     * @var integer proximity_alert_radius  For live locations, a maximum distance for proximity alerts about approaching another chat member, in meters. Must be between 1 and 100000 if specified.
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True*, if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating), [custom reply keyboard](https://core.telegram.org/bots#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * 
     * @access sendLocation
     */
     public static function sendLocation () {
        return true;
     }
}