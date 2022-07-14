<?php

namespace Milly\Laragram\Types;

use Milly\Laragram\Laragram;

/**
* Message
 *
 *This object represents a message.
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#message
 */
class Message extends Laragram
{
    /**
    * Unique message identifier inside this chat
    * @var int
    */
    public int $message_id;

    /**
    * *Optional*. Sender of the message; empty for messages sent to channels. For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
    * @var User|null
    */
    public ?User $from = null;

    /**
    * *Optional*. Sender of the message, sent on behalf of a chat. For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group administrators, the linked channel for messages automatically forwarded to the discussion group. For backward compatibility, the field *from* contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.
    * @var Chat|null
    */
    public ?Chat $sender_chat = null;

    /**
    * Date the message was sent in Unix time
    * @var int
    */
    public int $date;

    /**
    * Conversation the message belongs to
    * @var Chat
    */
    public Chat $chat;

    /**
    * *Optional*. For forwarded messages, sender of the original message
    * @var User|null
    */
    public ?User $forward_from = null;

    /**
    * *Optional*. For messages forwarded from channels or from anonymous administrators, information about the original sender chat
    * @var Chat|null
    */
    public ?Chat $forward_from_chat = null;

    /**
    * *Optional*. For messages forwarded from channels, identifier of the original message in the channel
    * @var int|null
    */
    public ?int $forward_from_message_id = null;

    /**
    * *Optional*. For forwarded messages that were originally sent in channels or by an anonymous chat administrator, signature of the message sender if present
    * @var string|null
    */
    public ?string $forward_signature = null;

    /**
    * *Optional*. Sender's name for messages forwarded from users who disallow adding a link to their account in forwarded messages
    * @var string|null
    */
    public ?string $forward_sender_name = null;

    /**
    * *Optional*. For forwarded messages, date the original message was sent in Unix time
    * @var int|null
    */
    public ?int $forward_date = null;

    /**
    * *Optional*. *True*, if the message is a channel post that was automatically forwarded to the connected discussion group
    * @var bool|null
    */
    public ?bool $is_automatic_forward = null;

    /**
    * *Optional*. For replies, the original message. Note that the Message object in this field will not contain further *reply\_to\_message* fields even if it itself is a reply.
    * @var Message|null
    */
    public ?Message $reply_to_message = null;

    /**
    * *Optional*. Bot through which the message was sent
    * @var User|null
    */
    public ?User $via_bot = null;

    /**
    * *Optional*. Date the message was last edited in Unix time
    * @var int|null
    */
    public ?int $edit_date = null;

    /**
    * *Optional*. *True*, if the message can't be forwarded
    * @var bool|null
    */
    public ?bool $has_protected_content = null;

    /**
    * *Optional*. The unique identifier of a media message group this message belongs to
    * @var string|null
    */
    public ?string $media_group_id = null;

    /**
    * *Optional*. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator
    * @var string|null
    */
    public ?string $author_signature = null;

    /**
    * *Optional*. For text messages, the actual UTF-8 text of the message
    * @var string|null
    */
    public ?string $text = null;

    /**
    * *Optional*. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text
    * @var array|null
    */
    public ?array $entities = null;

    /**
    * *Optional*. Message is an animation, information about the animation. For backward compatibility, when this field is set, the *document* field will also be set
    * @var Animation|null
    */
    public ?Animation $animation = null;

    /**
    * *Optional*. Message is an audio file, information about the file
    * @var Audio|null
    */
    public ?Audio $audio = null;

    /**
    * *Optional*. Message is a general file, information about the file
    * @var Document|null
    */
    public ?Document $document = null;

    /**
    * *Optional*. Message is a photo, available sizes of the photo
    * @var array|null
    */
    public ?array $photo = null;

    /**
    * *Optional*. Message is a sticker, information about the sticker
    * @var Sticker|null
    */
    public ?Sticker $sticker = null;

    /**
    * *Optional*. Message is a video, information about the video
    * @var Video|null
    */
    public ?Video $video = null;

    /**
    * *Optional*. Message is a [video note](https://telegram.org/blog/video-messages-and-telescope), information about the video message
    * @var VideoNote|null
    */
    public ?VideoNote $video_note = null;

    /**
    * *Optional*. Message is a voice message, information about the file
    * @var Voice|null
    */
    public ?Voice $voice = null;

    /**
    * *Optional*. Caption for the animation, audio, document, photo, video or voice
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * *Optional*. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * *Optional*. Message is a shared contact, information about the contact
    * @var Contact|null
    */
    public ?Contact $contact = null;

    /**
    * *Optional*. Message is a dice with random value
    * @var Dice|null
    */
    public ?Dice $dice = null;

    /**
    * *Optional*. Message is a game, information about the game. [More about games »](https://core.telegram.org/bots/api/#games)
    * @var Game|null
    */
    public ?Game $game = null;

    /**
    * *Optional*. Message is a native poll, information about the poll
    * @var Poll|null
    */
    public ?Poll $poll = null;

    /**
    * *Optional*. Message is a venue, information about the venue. For backward compatibility, when this field is set, the *location* field will also be set
    * @var Venue|null
    */
    public ?Venue $venue = null;

    /**
    * *Optional*. Message is a shared location, information about the location
    * @var Location|null
    */
    public ?Location $location = null;

    /**
    * *Optional*. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)
    * @var array|null
    */
    public ?array $new_chat_members = null;

    /**
    * *Optional*. A member was removed from the group, information about them (this member may be the bot itself)
    * @var User|null
    */
    public ?User $left_chat_member = null;

    /**
    * *Optional*. A chat title was changed to this value
    * @var string|null
    */
    public ?string $new_chat_title = null;

    /**
    * *Optional*. A chat photo was change to this value
    * @var array|null
    */
    public ?array $new_chat_photo = null;

    /**
    * *Optional*. Service message: the chat photo was deleted
    * @var bool|null
    */
    public ?bool $delete_chat_photo = null;

    /**
    * *Optional*. Service message: the group has been created
    * @var bool|null
    */
    public ?bool $group_chat_created = null;

    /**
    * *Optional*. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply\_to\_message if someone replies to a very first message in a directly created supergroup.
    * @var bool|null
    */
    public ?bool $supergroup_chat_created = null;

    /**
    * *Optional*. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply\_to\_message if someone replies to a very first message in a channel.
    * @var bool|null
    */
    public ?bool $channel_chat_created = null;

    /**
    * *Optional*. Service message: auto-delete timer settings changed in the chat
    * @var MessageAutoDeleteTimerChanged|null
    */
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed = null;

    /**
    * *Optional*. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
    * @var int|null
    */
    public ?int $migrate_to_chat_id = null;

    /**
    * *Optional*. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.
    * @var int|null
    */
    public ?int $migrate_from_chat_id = null;

    /**
    * *Optional*. Specified message was pinned. Note that the Message object in this field will not contain further *reply\_to\_message* fields even if it is itself a reply.
    * @var Message|null
    */
    public ?Message $pinned_message = null;

    /**
    * *Optional*. Message is an invoice for a [payment](https://core.telegram.org/bots/api/#payments), information about the invoice. [More about payments »](https://core.telegram.org/bots/api/#payments)
    * @var Invoice|null
    */
    public ?Invoice $invoice = null;

    /**
    * *Optional*. Message is a service message about a successful payment, information about the payment. [More about payments »](https://core.telegram.org/bots/api/#payments)
    * @var SuccessfulPayment|null
    */
    public ?SuccessfulPayment $successful_payment = null;

    /**
    * *Optional*. The domain name of the website on which the user has logged in. [More about Telegram Login »](https://core.telegram.org/widgets/login)
    * @var string|null
    */
    public ?string $connected_website = null;

    /**
    * *Optional*. Telegram Passport data
    * @var PassportData|null
    */
    public ?PassportData $passport_data = null;

    /**
    * *Optional*. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.
    * @var ProximityAlertTriggered|null
    */
    public ?ProximityAlertTriggered $proximity_alert_triggered = null;

    /**
    * *Optional*. Service message: video chat scheduled
    * @var VideoChatScheduled|null
    */
    public ?VideoChatScheduled $video_chat_scheduled = null;

    /**
    * *Optional*. Service message: video chat started
    * @var VideoChatStarted|null
    */
    public ?VideoChatStarted $video_chat_started = null;

    /**
    * *Optional*. Service message: video chat ended
    * @var VideoChatEnded|null
    */
    public ?VideoChatEnded $video_chat_ended = null;

    /**
    * *Optional*. Service message: new participants invited to a video chat
    * @var VideoChatParticipantsInvited|null
    */
    public ?VideoChatParticipantsInvited $video_chat_participants_invited = null;

    /**
    * *Optional*. Service message: data sent by a Web App
    * @var WebAppData|null
    */
    public ?WebAppData $web_app_data = null;

    /**
    * *Optional*. Inline keyboard attached to the message. `login_url` buttons are represented as ordinary `url` buttons.
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;



    public function __construct($data)
    {
        $this->message_id = $data['message_id'];
        if (isset($data['from'])){
            $this->from = new User($data['from']);
        }

        if (isset($data['sender_chat'])){
            $this->sender_chat = new Chat($data['sender_chat']);
        }

        $this->date = $data['date'];
        $this->chat = new Chat($data['chat']);

        if (isset($data['forward_from'])){
            $this->forward_from = new User($data['forward_from']);
        }

        if (isset($data['forward_from_chat'])){
            $this->forward_from_chat = new Chat($data['forward_from_chat']);
        }

        if (isset($data['forward_from_message_id'])){
            $this->forward_from_message_id = $data['forward_from_message_id'];
        }

        if (isset($data['forward_signature'])){
            $this->forward_signature = $data['forward_signature'];
        }

        if (isset($data['forward_sender_name'])){
            $this->forward_sender_name = $data['forward_sender_name'];
        }

        if (isset($data['forward_date'])){
            $this->forward_date = $data['forward_date'];
        }

        if (isset($data['is_automatic_forward'])){
            $this->is_automatic_forward = $data['is_automatic_forward'];
        }

        if (isset($data['reply_to_message'])){
            $this->reply_to_message = new Message($data['reply_to_message']);
        }

        if (isset($data['via_bot'])){
            $this->via_bot = new User($data['via_bot']);
        }

        if (isset($data['edit_date'])){
            $this->edit_date = $data['edit_date'];
        }

        if (isset($data['has_protected_content'])){
            $this->has_protected_content = $data['has_protected_content'];
        }

        if (isset($data['media_group_id'])){
            $this->media_group_id = $data['media_group_id'];
        }

        if (isset($data['author_signature'])){
            $this->author_signature = $data['author_signature'];
        }

        if (isset($data['text'])){
            $this->text = $data['text'];
        }

        if (isset($data['entities'])){
            $this->entities = $data['entities'];
        }

        if (isset($data['animation'])){
            $this->animation = new Animation($data['animation']);
        }

        if (isset($data['audio'])){
            $this->audio = new Audio($data['audio']);
        }

        if (isset($data['document'])){
            $this->document = new Document($data['document']);
        }

        if (isset($data['photo'])){
            $this->photo = $data['photo'];
        }

        if (isset($data['sticker'])){
            $this->sticker = new Sticker($data['sticker']);
        }

        if (isset($data['video'])){
            $this->video = new Video($data['video']);
        }

        if (isset($data['video_note'])){
            $this->video_note = new VideoNote($data['video_note']);
        }

        if (isset($data['voice'])){
            $this->voice = new Voice($data['voice']);
        }

        if (isset($data['caption'])){
            $this->caption = $data['caption'];
        }

        if (isset($data['caption_entities'])){
            $this->caption_entities = $data['caption_entities'];
        }

        if (isset($data['contact'])){
            $this->contact = new Contact($data['contact']);
        }

        if (isset($data['dice'])){
            $this->dice = new Dice($data['dice']);
        }

        if (isset($data['game'])){
            $this->game = new Game($data['game']);
        }

        if (isset($data['poll'])){
            $this->poll = new Poll($data['poll']);
        }

        if (isset($data['venue'])){
            $this->venue = new Venue($data['venue']);
        }

        if (isset($data['location'])){
            $this->location = new Location($data['location']);
        }

        if (isset($data['new_chat_members'])){
            $this->new_chat_members = $data['new_chat_members'];
        }

        if (isset($data['left_chat_member'])){
            $this->left_chat_member = new User($data['left_chat_member']);
        }

        if (isset($data['new_chat_title'])){
            $this->new_chat_title = $data['new_chat_title'];
        }

        if (isset($data['new_chat_photo'])){
            $this->new_chat_photo = $data['new_chat_photo'];
        }

        if (isset($data['delete_chat_photo'])){
            $this->delete_chat_photo = $data['delete_chat_photo'];
        }

        if (isset($data['group_chat_created'])){
            $this->group_chat_created = $data['group_chat_created'];
        }

        if (isset($data['supergroup_chat_created'])){
            $this->supergroup_chat_created = $data['supergroup_chat_created'];
        }

        if (isset($data['channel_chat_created'])){
            $this->channel_chat_created = $data['channel_chat_created'];
        }

        if (isset($data['message_auto_delete_timer_changed'])){
            $this->message_auto_delete_timer_changed = new MessageAutoDeleteTimerChanged($data['message_auto_delete_timer_changed']);
        }

        if (isset($data['migrate_to_chat_id'])){
            $this->migrate_to_chat_id = $data['migrate_to_chat_id'];
        }

        if (isset($data['migrate_from_chat_id'])){
            $this->migrate_from_chat_id = $data['migrate_from_chat_id'];
        }

        if (isset($data['pinned_message'])){
            $this->pinned_message = new Message($data['pinned_message']);
        }

        if (isset($data['invoice'])){
            $this->invoice = new Invoice($data['invoice']);
        }

        if (isset($data['successful_payment'])){
            $this->successful_payment = new SuccessfulPayment($data['successful_payment']);
        }

        if (isset($data['connected_website'])){
            $this->connected_website = $data['connected_website'];
        }

        if (isset($data['passport_data'])){
            $this->passport_data = new PassportData($data['passport_data']);
        }

        if (isset($data['proximity_alert_triggered'])){
            $this->proximity_alert_triggered = new ProximityAlertTriggered($data['proximity_alert_triggered']);
        }

        if (isset($data['video_chat_scheduled'])){
            $this->video_chat_scheduled = new VideoChatScheduled($data['video_chat_scheduled']);
        }

        if (isset($data['video_chat_started'])){
            $this->video_chat_started = new VideoChatStarted($data['video_chat_started']);
        }

        if (isset($data['video_chat_ended'])){
            $this->video_chat_ended = new VideoChatEnded($data['video_chat_ended']);
        }

        if (isset($data['video_chat_participants_invited'])){
            $this->video_chat_participants_invited = new VideoChatParticipantsInvited($data['video_chat_participants_invited']);
        }

        if (isset($data['web_app_data'])){
            $this->web_app_data = new WebAppData($data['web_app_data']);
        }

        if (isset($data['reply_markup'])){
            $this->reply_markup = new InlineKeyboardMarkup($data['reply_markup']);
        }

    }
}