<?php

namespace Milly\Laragram\Methods;

use Milly\Laragram\Laragram;

/**
* sendPoll
 *
 *Use this method to send a native poll. On success, the sent [Message](https://core.telegram.org/bots/api/#message) is returned.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#sendpoll
 * @abstract
 */
abstract class sendPoll extends Laragram
{
    /**
     * @var integer|string  chat_id *(required: true)* Unique identifier for the target chat or username of the target channel (in the format `@channelusername`)
     * @var string question *(required: true)**(min length: 1)**(max length: 1)* Poll question, 1-300 characters
     * @var array options *(required: true)* A JSON-serialized list of answer options, 2-10 strings 1-100 characters each
     * @var bool is_anonymous *(default: 1)* *True*, if the poll needs to be anonymous, defaults to *True*
     * @var string type *(default: regular)* Poll type, “quiz” or “regular”, defaults to “regular”
     * @var bool allows_multiple_answers *(default: )* *True*, if the poll allows multiple answers, ignored for polls in quiz mode, defaults to *False*
     * @var integer correct_option_id  0-based identifier of the correct answer option, required for polls in quiz mode
     * @var string explanation *(min length: 0)**(max length: 0)* Text that is shown when a user chooses an incorrect answer or taps on the lamp icon in a quiz-style poll, 0-200 characters with at most 2 line feeds after entities parsing
     * @var string explanation_parse_mode  Mode for parsing entities in the explanation. See [formatting options](https://core.telegram.org/bots/api/#formatting-options) for more details.
     * @var array explanation_entities  A JSON-serialized list of special entities that appear in the poll explanation, which can be specified instead of *parse\_mode*
     * @var integer open_period  Amount of time in seconds the poll will be active after creation, 5-600. Can't be used together with *close\_date*.
     * @var integer close_date  Point in time (Unix timestamp) when the poll will be automatically closed. Must be at least 5 and no more than 600 seconds in the future. Can't be used together with *open\_period*.
     * @var bool is_closed  Pass *True*, if the poll needs to be immediately closed. This can be useful for poll preview.
     * @var bool disable_notification  Sends the message [silently](https://telegram.org/blog/channels-2-0#silent-messages). Users will receive a notification with no sound.
     * @var bool protect_content  Protects the contents of the sent message from forwarding and saving
     * @var integer reply_to_message_id  If the message is a reply, ID of the original message
     * @var bool allow_sending_without_reply  Pass *True*, if the message should be sent even if the specified replied-to message is not found
     * @var \Milly\Laragram\Types\InlineKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardMarkup|\Milly\Laragram\Types\ReplyKeyboardRemove|\Milly\Laragram\Types\ForceReply  reply_markup  Additional interface options. A JSON-serialized object for an [inline keyboard](https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating), [custom reply keyboard](https://core.telegram.org/bots#keyboards), instructions to remove reply keyboard or to force a reply from the user.
     * 
     * @access sendPoll
     */
     public static function sendPoll () {
        return true;
     }
}