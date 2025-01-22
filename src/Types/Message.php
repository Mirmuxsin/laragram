<?php

namespace Milly\Laragram\Types;


/**
* Message
 *
 *<p>*Optional*. Inline keyboard attached to the message. `login_url` buttons are represented as ordinary `url` buttons.</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#message
 */
class Message
{
    /**
    * <p>Unique message identifier inside this chat</p>
    * @var int
    */
    public int $message_id;

    /**
    * <p>*Optional*. Unique identifier of a message thread to which the message belongs; for supergroups only</p>
    * @var int|null
    */
    public ?int $message_thread_id = null;

    /**
    * <p>*Optional*. Sender of the message; empty for messages sent to channels. For backward compatibility, the field contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.</p>
    * @var User|null
    */
    public ?User $from = null;

    /**
    * <p>*Optional*. Sender of the message, sent on behalf of a chat. For example, the channel itself for channel posts, the supergroup itself for messages from anonymous group administrators, the linked channel for messages automatically forwarded to the discussion group. For backward compatibility, the field *from* contains a fake sender user in non-channel chats, if the message was sent on behalf of a chat.</p>
    * @var Chat|null
    */
    public ?Chat $sender_chat = null;

    /**
    * <p>*Optional*. If the sender of the message boosted the chat, the number of boosts added by the user</p>
    * @var int|null
    */
    public ?int $sender_boost_count = null;

    /**
    * <p>*Optional*. The bot that actually sent the message on behalf of the business account. Available only for outgoing messages sent on behalf of the connected business account.</p>
    * @var User|null
    */
    public ?User $sender_business_bot = null;

    /**
    * <p>Date the message was sent in Unix time. It is always a positive number, representing a valid date.</p>
    * @var int
    */
    public int $date;

    /**
    * <p>*Optional*. Unique identifier of the business connection from which the message was received. If non-empty, the message belongs to a chat of the corresponding business account that is independent from any potential bot chat which might share the same identifier.</p>
    * @var string|null
    */
    public ?string $business_connection_id = null;

    /**
    * <p>Chat the message belongs to</p>
    * @var Chat
    */
    public Chat $chat;

    /**
    * <p>*Optional*. Information about the original message for forwarded messages</p>
    * @var MessageOrigin|null
    */
    public ?MessageOrigin $forward_origin = null;

    /**
    * <p>*Optional*. *True*, if the message is sent to a forum topic</p>
    * @var bool|null
    */
    public ?bool $is_topic_message = null;

    /**
    * <p>*Optional*. *True*, if the message is a channel post that was automatically forwarded to the connected discussion group</p>
    * @var bool|null
    */
    public ?bool $is_automatic_forward = null;

    /**
    * <p>*Optional*. For replies in the same chat and message thread, the original message. Note that the Message object in this field will not contain further *reply\<em>to\</em>message* fields even if it itself is a reply.</p>
    * @var Message|null
    */
    public ?Message $reply_to_message = null;

    /**
    * <p>*Optional*. Information about the message that is being replied to, which may come from another chat or forum topic</p>
    * @var ExternalReplyInfo|null
    */
    public ?ExternalReplyInfo $external_reply = null;

    /**
    * <p>*Optional*. For replies that quote part of the original message, the quoted part of the message</p>
    * @var TextQuote|null
    */
    public ?TextQuote $quote = null;

    /**
    * <p>*Optional*. For replies to a story, the original story</p>
    * @var Story|null
    */
    public ?Story $reply_to_story = null;

    /**
    * <p>*Optional*. Bot through which the message was sent</p>
    * @var User|null
    */
    public ?User $via_bot = null;

    /**
    * <p>*Optional*. Date the message was last edited in Unix time</p>
    * @var int|null
    */
    public ?int $edit_date = null;

    /**
    * <p>*Optional*. *True*, if the message can't be forwarded</p>
    * @var bool|null
    */
    public ?bool $has_protected_content = null;

    /**
    * <p>*Optional*. True, if the message was sent by an implicit action, for example, as an away or a greeting business message, or as a scheduled message</p>
    * @var bool|null
    */
    public ?bool $is_from_offline = null;

    /**
    * <p>*Optional*. The unique identifier of a media message group this message belongs to</p>
    * @var string|null
    */
    public ?string $media_group_id = null;

    /**
    * <p>*Optional*. Signature of the post author for messages in channels, or the custom title of an anonymous group administrator</p>
    * @var string|null
    */
    public ?string $author_signature = null;

    /**
    * <p>*Optional*. For text messages, the actual UTF-8 text of the message</p>
    * @var string|null
    */
    public ?string $text = null;

    /**
    * <p>*Optional*. For text messages, special entities like usernames, URLs, bot commands, etc. that appear in the text</p>
    * @var array|null
    */
    public ?array $entities = null;

    /**
    * <p>*Optional*. Options used for link preview generation for the message, if it is a text message and link preview options were changed</p>
    * @var LinkPreviewOptions|null
    */
    public ?LinkPreviewOptions $link_preview_options = null;

    /**
    * <p>*Optional*. Unique identifier of the message effect added to the message</p>
    * @var string|null
    */
    public ?string $effect_id = null;

    /**
    * <p>*Optional*. Message is an animation, information about the animation. For backward compatibility, when this field is set, the *document* field will also be set</p>
    * @var Animation|null
    */
    public ?Animation $animation = null;

    /**
    * <p>*Optional*. Message is an audio file, information about the file</p>
    * @var Audio|null
    */
    public ?Audio $audio = null;

    /**
    * <p>*Optional*. Message is a general file, information about the file</p>
    * @var Document|null
    */
    public ?Document $document = null;

    /**
    * <p>*Optional*. Message is a photo, available sizes of the photo</p>
    * @var array|null
    */
    public ?array $photo = null;

    /**
    * <p>*Optional*. Message is a sticker, information about the sticker</p>
    * @var Sticker|null
    */
    public ?Sticker $sticker = null;

    /**
    * <p>*Optional*. Message is a forwarded story</p>
    * @var Story|null
    */
    public ?Story $story = null;

    /**
    * <p>*Optional*. Message is a video, information about the video</p>
    * @var Video|null
    */
    public ?Video $video = null;

    /**
    * <p>*Optional*. Message is a <a href="https://telegram.org/blog/video-messages-and-telescope">video note</a>, information about the video message</p>
    * @var VideoNote|null
    */
    public ?VideoNote $video_note = null;

    /**
    * <p>*Optional*. Message is a voice message, information about the file</p>
    * @var Voice|null
    */
    public ?Voice $voice = null;

    /**
    * <p>*Optional*. Caption for the animation, audio, document, photo, video or voice</p>
    * @var string|null
    */
    public ?string $caption = null;

    /**
    * <p>*Optional*. For messages with a caption, special entities like usernames, URLs, bot commands, etc. that appear in the caption</p>
    * @var array|null
    */
    public ?array $caption_entities = null;

    /**
    * <p>*Optional*. True, if the caption must be shown above the message media</p>
    * @var bool|null
    */
    public ?bool $show_caption_above_media = null;

    /**
    * <p>*Optional*. *True*, if the message media is covered by a spoiler animation</p>
    * @var bool|null
    */
    public ?bool $has_media_spoiler = null;

    /**
    * <p>*Optional*. Message is a shared contact, information about the contact</p>
    * @var Contact|null
    */
    public ?Contact $contact = null;

    /**
    * <p>*Optional*. Message is a dice with random value</p>
    * @var Dice|null
    */
    public ?Dice $dice = null;

    /**
    * <p>*Optional*. Message is a game, information about the game. <a href="https://core.telegram.org/bots/api/#games">More about games »</a></p>
    * @var Game|null
    */
    public ?Game $game = null;

    /**
    * <p>*Optional*. Message is a native poll, information about the poll</p>
    * @var Poll|null
    */
    public ?Poll $poll = null;

    /**
    * <p>*Optional*. Message is a venue, information about the venue. For backward compatibility, when this field is set, the *location* field will also be set</p>
    * @var Venue|null
    */
    public ?Venue $venue = null;

    /**
    * <p>*Optional*. Message is a shared location, information about the location</p>
    * @var Location|null
    */
    public ?Location $location = null;

    /**
    * <p>*Optional*. New members that were added to the group or supergroup and information about them (the bot itself may be one of these members)</p>
    * @var array|null
    */
    public ?array $new_chat_members = null;

    /**
    * <p>*Optional*. A member was removed from the group, information about them (this member may be the bot itself)</p>
    * @var User|null
    */
    public ?User $left_chat_member = null;

    /**
    * <p>*Optional*. A chat title was changed to this value</p>
    * @var string|null
    */
    public ?string $new_chat_title = null;

    /**
    * <p>*Optional*. A chat photo was change to this value</p>
    * @var array|null
    */
    public ?array $new_chat_photo = null;

    /**
    * <p>*Optional*. Service message: the chat photo was deleted</p>
    * @var bool|null
    */
    public ?bool $delete_chat_photo = null;

    /**
    * <p>*Optional*. Service message: the group has been created</p>
    * @var bool|null
    */
    public ?bool $group_chat_created = null;

    /**
    * <p>*Optional*. Service message: the supergroup has been created. This field can't be received in a message coming through updates, because bot can't be a member of a supergroup when it is created. It can only be found in reply\<em>to\</em>message if someone replies to a very first message in a directly created supergroup.</p>
    * @var bool|null
    */
    public ?bool $supergroup_chat_created = null;

    /**
    * <p>*Optional*. Service message: the channel has been created. This field can't be received in a message coming through updates, because bot can't be a member of a channel when it is created. It can only be found in reply\<em>to\</em>message if someone replies to a very first message in a channel.</p>
    * @var bool|null
    */
    public ?bool $channel_chat_created = null;

    /**
    * <p>*Optional*. Service message: auto-delete timer settings changed in the chat</p>
    * @var MessageAutoDeleteTimerChanged|null
    */
    public ?MessageAutoDeleteTimerChanged $message_auto_delete_timer_changed = null;

    /**
    * <p>*Optional*. The group has been migrated to a supergroup with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.</p>
    * @var int|null
    */
    public ?int $migrate_to_chat_id = null;

    /**
    * <p>*Optional*. The supergroup has been migrated from a group with the specified identifier. This number may have more than 32 significant bits and some programming languages may have difficulty/silent defects in interpreting it. But it has at most 52 significant bits, so a signed 64-bit integer or double-precision float type are safe for storing this identifier.</p>
    * @var int|null
    */
    public ?int $migrate_from_chat_id = null;

    /**
    * <p>*Optional*. Specified message was pinned. Note that the Message object in this field will not contain further *reply\<em>to\</em>message* fields even if it itself is a reply.</p>
    * @var Message|null
    */
    public ?Message $pinned_message = null;

    /**
    * <p>*Optional*. Message is an invoice for a <a href="https://core.telegram.org/bots/api/#payments">payment</a>, information about the invoice. <a href="https://core.telegram.org/bots/api/#payments">More about payments »</a></p>
    * @var Invoice|null
    */
    public ?Invoice $invoice = null;

    /**
    * <p>*Optional*. Message is a service message about a successful payment, information about the payment. <a href="https://core.telegram.org/bots/api/#payments">More about payments »</a></p>
    * @var SuccessfulPayment|null
    */
    public ?SuccessfulPayment $successful_payment = null;

    /**
    * <p>*Optional*. Service message: users were shared with the bot</p>
    * @var UsersShared|null
    */
    public ?UsersShared $users_shared = null;

    /**
    * <p>*Optional*. Service message: a chat was shared with the bot</p>
    * @var ChatShared|null
    */
    public ?ChatShared $chat_shared = null;

    /**
    * <p>*Optional*. The domain name of the website on which the user has logged in. <a href="https://core.telegram.org/widgets/login">More about Telegram Login »</a></p>
    * @var string|null
    */
    public ?string $connected_website = null;

    /**
    * <p>*Optional*. Service message: the user allowed the bot to write messages after adding it to the attachment or side menu, launching a Web App from a link, or accepting an explicit request from a Web App sent by the method <a href="https://core.telegram.org/bots/webapps#initializing-mini-apps">requestWriteAccess</a></p>
    * @var WriteAccessAllowed|null
    */
    public ?WriteAccessAllowed $write_access_allowed = null;

    /**
    * <p>*Optional*. Telegram Passport data</p>
    * @var PassportData|null
    */
    public ?PassportData $passport_data = null;

    /**
    * <p>*Optional*. Service message. A user in the chat triggered another user's proximity alert while sharing Live Location.</p>
    * @var ProximityAlertTriggered|null
    */
    public ?ProximityAlertTriggered $proximity_alert_triggered = null;

    /**
    * <p>*Optional*. Service message: user boosted the chat</p>
    * @var ChatBoostAdded|null
    */
    public ?ChatBoostAdded $boost_added = null;

    /**
    * <p>*Optional*. Service message: chat background set</p>
    * @var ChatBackground|null
    */
    public ?ChatBackground $chat_background_set = null;

    /**
    * <p>*Optional*. Service message: forum topic created</p>
    * @var ForumTopicCreated|null
    */
    public ?ForumTopicCreated $forum_topic_created = null;

    /**
    * <p>*Optional*. Service message: forum topic edited</p>
    * @var ForumTopicEdited|null
    */
    public ?ForumTopicEdited $forum_topic_edited = null;

    /**
    * <p>*Optional*. Service message: forum topic closed</p>
    * @var ForumTopicClosed|null
    */
    public ?ForumTopicClosed $forum_topic_closed = null;

    /**
    * <p>*Optional*. Service message: forum topic reopened</p>
    * @var ForumTopicReopened|null
    */
    public ?ForumTopicReopened $forum_topic_reopened = null;

    /**
    * <p>*Optional*. Service message: the 'General' forum topic hidden</p>
    * @var GeneralForumTopicHidden|null
    */
    public ?GeneralForumTopicHidden $general_forum_topic_hidden = null;

    /**
    * <p>*Optional*. Service message: the 'General' forum topic unhidden</p>
    * @var GeneralForumTopicUnhidden|null
    */
    public ?GeneralForumTopicUnhidden $general_forum_topic_unhidden = null;

    /**
    * <p>*Optional*. Service message: a scheduled giveaway was created</p>
    * @var GiveawayCreated|null
    */
    public ?GiveawayCreated $giveaway_created = null;

    /**
    * <p>*Optional*. The message is a scheduled giveaway message</p>
    * @var Giveaway|null
    */
    public ?Giveaway $giveaway = null;

    /**
    * <p>*Optional*. A giveaway with public winners was completed</p>
    * @var GiveawayWinners|null
    */
    public ?GiveawayWinners $giveaway_winners = null;

    /**
    * <p>*Optional*. Service message: a giveaway without public winners was completed</p>
    * @var GiveawayCompleted|null
    */
    public ?GiveawayCompleted $giveaway_completed = null;

    /**
    * <p>*Optional*. Service message: video chat scheduled</p>
    * @var VideoChatScheduled|null
    */
    public ?VideoChatScheduled $video_chat_scheduled = null;

    /**
    * <p>*Optional*. Service message: video chat started</p>
    * @var VideoChatStarted|null
    */
    public ?VideoChatStarted $video_chat_started = null;

    /**
    * <p>*Optional*. Service message: video chat ended</p>
    * @var VideoChatEnded|null
    */
    public ?VideoChatEnded $video_chat_ended = null;

    /**
    * <p>*Optional*. Service message: new participants invited to a video chat</p>
    * @var VideoChatParticipantsInvited|null
    */
    public ?VideoChatParticipantsInvited $video_chat_participants_invited = null;

    /**
    * <p>*Optional*. Service message: data sent by a Web App</p>
    * @var WebAppData|null
    */
    public ?WebAppData $web_app_data = null;

    /**
    * <p>*Optional*. Inline keyboard attached to the message. `login_url` buttons are represented as ordinary `url` buttons.</p>
    * @var InlineKeyboardMarkup|null
    */
    public ?InlineKeyboardMarkup $reply_markup = null;



    public function __construct($data = null)
    {
        if ($data == null) $data = Handler::get()['message'];
        $this->message_id = $data['message_id'];
        if (isset($data['message_thread_id'])){
            $this->message_thread_id = $data['message_thread_id'];
        }

        if (isset($data['from'])){
            $this->from = new User($data['from']);
        }

        if (isset($data['sender_chat'])){
            $this->sender_chat = new Chat($data['sender_chat']);
        }

        if (isset($data['sender_boost_count'])){
            $this->sender_boost_count = $data['sender_boost_count'];
        }

        if (isset($data['sender_business_bot'])){
            $this->sender_business_bot = new User($data['sender_business_bot']);
        }

        $this->date = $data['date'];
        if (isset($data['business_connection_id'])){
            $this->business_connection_id = $data['business_connection_id'];
        }

        $this->chat = new Chat($data['chat']);

        if (isset($data['forward_origin'])){
            $this->forward_origin = new MessageOrigin($data['forward_origin']);
        }

        if (isset($data['is_topic_message'])){
            $this->is_topic_message = $data['is_topic_message'];
        }

        if (isset($data['is_automatic_forward'])){
            $this->is_automatic_forward = $data['is_automatic_forward'];
        }

        if (isset($data['reply_to_message'])){
            $this->reply_to_message = new Message($data['reply_to_message']);
        }

        if (isset($data['external_reply'])){
            $this->external_reply = new ExternalReplyInfo($data['external_reply']);
        }

        if (isset($data['quote'])){
            $this->quote = new TextQuote($data['quote']);
        }

        if (isset($data['reply_to_story'])){
            $this->reply_to_story = new Story($data['reply_to_story']);
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

        if (isset($data['is_from_offline'])){
            $this->is_from_offline = $data['is_from_offline'];
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

        if (isset($data['link_preview_options'])){
            $this->link_preview_options = new LinkPreviewOptions($data['link_preview_options']);
        }

        if (isset($data['effect_id'])){
            $this->effect_id = $data['effect_id'];
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

        if (isset($data['story'])){
            $this->story = new Story($data['story']);
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

        if (isset($data['show_caption_above_media'])){
            $this->show_caption_above_media = $data['show_caption_above_media'];
        }

        if (isset($data['has_media_spoiler'])){
            $this->has_media_spoiler = $data['has_media_spoiler'];
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

        if (isset($data['users_shared'])){
            $this->users_shared = new UsersShared($data['users_shared']);
        }

        if (isset($data['chat_shared'])){
            $this->chat_shared = new ChatShared($data['chat_shared']);
        }

        if (isset($data['connected_website'])){
            $this->connected_website = $data['connected_website'];
        }

        if (isset($data['write_access_allowed'])){
            $this->write_access_allowed = new WriteAccessAllowed($data['write_access_allowed']);
        }

        if (isset($data['passport_data'])){
            $this->passport_data = new PassportData($data['passport_data']);
        }

        if (isset($data['proximity_alert_triggered'])){
            $this->proximity_alert_triggered = new ProximityAlertTriggered($data['proximity_alert_triggered']);
        }

        if (isset($data['boost_added'])){
            $this->boost_added = new ChatBoostAdded($data['boost_added']);
        }

        if (isset($data['chat_background_set'])){
            $this->chat_background_set = new ChatBackground($data['chat_background_set']);
        }

        if (isset($data['forum_topic_created'])){
            $this->forum_topic_created = new ForumTopicCreated($data['forum_topic_created']);
        }

        if (isset($data['forum_topic_edited'])){
            $this->forum_topic_edited = new ForumTopicEdited($data['forum_topic_edited']);
        }

        if (isset($data['forum_topic_closed'])){
            $this->forum_topic_closed = new ForumTopicClosed($data['forum_topic_closed']);
        }

        if (isset($data['forum_topic_reopened'])){
            $this->forum_topic_reopened = new ForumTopicReopened($data['forum_topic_reopened']);
        }

        if (isset($data['general_forum_topic_hidden'])){
            $this->general_forum_topic_hidden = new GeneralForumTopicHidden($data['general_forum_topic_hidden']);
        }

        if (isset($data['general_forum_topic_unhidden'])){
            $this->general_forum_topic_unhidden = new GeneralForumTopicUnhidden($data['general_forum_topic_unhidden']);
        }

        if (isset($data['giveaway_created'])){
            $this->giveaway_created = new GiveawayCreated($data['giveaway_created']);
        }

        if (isset($data['giveaway'])){
            $this->giveaway = new Giveaway($data['giveaway']);
        }

        if (isset($data['giveaway_winners'])){
            $this->giveaway_winners = new GiveawayWinners($data['giveaway_winners']);
        }

        if (isset($data['giveaway_completed'])){
            $this->giveaway_completed = new GiveawayCompleted($data['giveaway_completed']);
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
