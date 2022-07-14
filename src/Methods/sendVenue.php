<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* sendVenue
 *
 *Use this method to send information about a venue. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sendvenue
 * @abstract
 */
abstract class sendVenue extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var float latitude *(required: true)* Latitude of the venue
     * @var float longitude *(required: true)* Longitude of the venue
     * @var string title *(required: true)* Name of the venue
     * @var string address *(required: true)* Address of the venue
     * @var string foursquare_id  Foursquare identifier of the venue
     * @var string foursquare_type  Foursquare type of the venue, if known. (For example, “arts\_entertainment/default”, “arts\_entertainment/aquarium” or “food/icecream”.)
     * @var string google_place_id  Google Places identifier of the venue
     * @var string google_place_type  Google Places type of the venue. (See [supported types](https://developers.google.com/places/web-service/supported_types).)
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True*, if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating), [custom reply keyboard](https://core.telegram.org/bots#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * 
     * @access sendVenue
     */
     public static function sendVenue () {
        return true;
     }
}