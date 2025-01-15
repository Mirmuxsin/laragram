<?php

namespace Milly\Laragram\Types;

/**
* ExternalReplyInfo
 *
 *<p>*Optional*. Message is a venue, information about the venue</p>
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#externalreplyinfo
 */
class ExternalReplyInfo
{
    /**
    * <p>Origin of the message replied to by the given message</p>
    * @var MessageOrigin
    */
    public MessageOrigin $origin;

    /**
    * <p>*Optional*. Chat the original message belongs to. Available only if the chat is a supergroup or a channel.</p>
    * @var Chat|null
    */
    public ?Chat $chat = null;

    /**
    * <p>*Optional*. Unique message identifier inside the original chat. Available only if the original chat is a supergroup or a channel.</p>
    * @var int|null
    */
    public ?int $message_id = null;

    /**
    * <p>*Optional*. Options used for link preview generation for the original message, if it is a text message</p>
    * @var LinkPreviewOptions|null
    */
    public ?LinkPreviewOptions $link_preview_options = null;

    /**
    * <p>*Optional*. Message is an animation, information about the animation</p>
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
    * <p>*Optional*. Message contains paid media; information about the paid media</p>
    * @var PaidMediaInfo|null
    */
    public ?PaidMediaInfo $paid_media = null;

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
    * <p>*Optional*. Message is a scheduled giveaway, information about the giveaway</p>
    * @var Giveaway|null
    */
    public ?Giveaway $giveaway = null;

    /**
    * <p>*Optional*. A giveaway with public winners was completed</p>
    * @var GiveawayWinners|null
    */
    public ?GiveawayWinners $giveaway_winners = null;

    /**
    * <p>*Optional*. Message is an invoice for a <a href="https://core.telegram.org/bots/api/#payments">payment</a>, information about the invoice. <a href="https://core.telegram.org/bots/api/#payments">More about payments »</a></p>
    * @var Invoice|null
    */
    public ?Invoice $invoice = null;

    /**
    * <p>*Optional*. Message is a shared location, information about the location</p>
    * @var Location|null
    */
    public ?Location $location = null;

    /**
    * <p>*Optional*. Message is a native poll, information about the poll</p>
    * @var Poll|null
    */
    public ?Poll $poll = null;

    /**
    * <p>*Optional*. Message is a venue, information about the venue</p>
    * @var Venue|null
    */
    public ?Venue $venue = null;



    public function __construct($data)
    {
        $this->origin = new MessageOrigin($data['origin']);

        if (isset($data['chat'])){
            $this->chat = new Chat($data['chat']);
        }

        if (isset($data['message_id'])){
            $this->message_id = $data['message_id'];
        }

        if (isset($data['link_preview_options'])){
            $this->link_preview_options = new LinkPreviewOptions($data['link_preview_options']);
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

        if (isset($data['paid_media'])){
            $this->paid_media = new PaidMediaInfo($data['paid_media']);
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

        if (isset($data['giveaway'])){
            $this->giveaway = new Giveaway($data['giveaway']);
        }

        if (isset($data['giveaway_winners'])){
            $this->giveaway_winners = new GiveawayWinners($data['giveaway_winners']);
        }

        if (isset($data['invoice'])){
            $this->invoice = new Invoice($data['invoice']);
        }

        if (isset($data['location'])){
            $this->location = new Location($data['location']);
        }

        if (isset($data['poll'])){
            $this->poll = new Poll($data['poll']);
        }

        if (isset($data['venue'])){
            $this->venue = new Venue($data['venue']);
        }

    }
}