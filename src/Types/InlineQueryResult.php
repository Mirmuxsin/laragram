<?php

namespace Milly\Laragram\Types;

/**
* InlineQueryResult
 *
 *
 * @author Mirmuxsin Khamroev (https://github.com/Mirmuxsin)
 * @url https://core.telegram.org/bots/api/#inlinequeryresult
 */
class InlineQueryResult
{


    public InlineQueryResultCachedAudio $inlineQueryResultCachedAudio;

    public InlineQueryResultCachedDocument $inlineQueryResultCachedDocument;

    public InlineQueryResultCachedGif $inlineQueryResultCachedGif;

    public InlineQueryResultCachedMpeg4Gif $inlineQueryResultCachedMpeg4Gif;

    public InlineQueryResultCachedPhoto $inlineQueryResultCachedPhoto;

    public InlineQueryResultCachedSticker $inlineQueryResultCachedSticker;

    public InlineQueryResultCachedVideo $inlineQueryResultCachedVideo;

    public InlineQueryResultCachedVoice $inlineQueryResultCachedVoice;

    public InlineQueryResultArticle $inlineQueryResultArticle;

    public InlineQueryResultAudio $inlineQueryResultAudio;

    public InlineQueryResultContact $inlineQueryResultContact;

    public InlineQueryResultGame $inlineQueryResultGame;

    public InlineQueryResultDocument $inlineQueryResultDocument;

    public InlineQueryResultGif $inlineQueryResultGif;

    public InlineQueryResultLocation $inlineQueryResultLocation;

    public InlineQueryResultMpeg4Gif $inlineQueryResultMpeg4Gif;

    public InlineQueryResultPhoto $inlineQueryResultPhoto;

    public InlineQueryResultVenue $inlineQueryResultVenue;

    public InlineQueryResultVideo $inlineQueryResultVideo;

    public InlineQueryResultVoice $inlineQueryResultVoice;



    public function __construct($data)
    {
        $this->inlineQueryResultCachedAudio = new InlineQueryResultCachedAudio($data);
        $this->inlineQueryResultCachedDocument = new InlineQueryResultCachedDocument($data);
        $this->inlineQueryResultCachedGif = new InlineQueryResultCachedGif($data);
        $this->inlineQueryResultCachedMpeg4Gif = new InlineQueryResultCachedMpeg4Gif($data);
        $this->inlineQueryResultCachedPhoto = new InlineQueryResultCachedPhoto($data);
        $this->inlineQueryResultCachedSticker = new InlineQueryResultCachedSticker($data);
        $this->inlineQueryResultCachedVideo = new InlineQueryResultCachedVideo($data);
        $this->inlineQueryResultCachedVoice = new InlineQueryResultCachedVoice($data);
        $this->inlineQueryResultArticle = new InlineQueryResultArticle($data);
        $this->inlineQueryResultAudio = new InlineQueryResultAudio($data);
        $this->inlineQueryResultContact = new InlineQueryResultContact($data);
        $this->inlineQueryResultGame = new InlineQueryResultGame($data);
        $this->inlineQueryResultDocument = new InlineQueryResultDocument($data);
        $this->inlineQueryResultGif = new InlineQueryResultGif($data);
        $this->inlineQueryResultLocation = new InlineQueryResultLocation($data);
        $this->inlineQueryResultMpeg4Gif = new InlineQueryResultMpeg4Gif($data);
        $this->inlineQueryResultPhoto = new InlineQueryResultPhoto($data);
        $this->inlineQueryResultVenue = new InlineQueryResultVenue($data);
        $this->inlineQueryResultVideo = new InlineQueryResultVideo($data);
        $this->inlineQueryResultVoice = new InlineQueryResultVoice($data);
    }
}